#include <SPI.h>
#include <Ethernet.h>
int devices[]={2,3,4,5,6,7,8,9,14,15};
#define MAX_STRING_LEN  20
char tagStr[MAX_STRING_LEN] = "";
char dataStr[MAX_STRING_LEN] = "";
char tmpStr[MAX_STRING_LEN] = "";
char endTag[3] = {'<', '/', '\0'};
int len;
int count=0;
boolean tagFlag = false;
boolean dataFlag = false;
byte mac[] = { 0x90, 0xA2, 0xDA, 0x0D, 0xFE, 0xD2 };
IPAddress ip(192, 168, 0 ,200); 
byte gateway[] = { 192,168,0,1 }; 

byte server[] = { 192,168,0,107}; 

byte subnet[]={255,255,255,0};
EthernetClient client;
void setup()
{
Serial.begin(9600);
Ethernet.begin(mac, ip, gateway,subnet);
 for(int i=0;i<10;i++)
  {
   pinMode(devices[i],OUTPUT); 
  }
}
void loop()
{
  if (client.connect(server,80)) {  //starts client connection, checks for connection
    Serial.println("connected");
    client.println("GET /test.xml HTTP/1.1");
    client.println( "Host: localhost");
    client.println(); 
   } 
  else {
    Serial.println("connection failed"); //error message if no client connect
    Serial.println();
   }
   while(client.connected() && !client.available()) delay(1); //waits for data
   while (client.connected() || client.available())
  { 
    xmlread();
  }


}


void xmlread() {
  
char inChar = client.read();
 
  if (inChar == '<') {
     addChar(inChar, tmpStr);
     tagFlag = true;
     dataFlag = false;
   } 
  
  
  else if (inChar == '>') {
     addChar(inChar, tmpStr);
     if (tagFlag) {      
        strncpy(tagStr, tmpStr, strlen(tmpStr)+1);
     }
     clearStr(tmpStr);
     tagFlag = false;
     dataFlag = true;         
   } 
  

  else if (inChar != 10)
  {
    if (tagFlag) 
     {
       addChar(inChar, tmpStr);
        if ( tagFlag && strcmp(tmpStr, endTag) == 0 )
         {
           clearStr(tmpStr);
           tagFlag = false;
           dataFlag = false;
         }
      }
      if (dataFlag) {
        addChar(inChar, dataStr);
     }
   }
   
   
   if (inChar == 10 ) {
    if (matchTag("<state>")) {
        
	Serial.print("state: ");
        Serial.println(dataStr);
        Serial.print("length--");
        Serial.println(strlen(dataStr));
        count=count+1;
        Serial.println(count);
       devicescontrol(count,dataStr);
       if(count==10)
       {
         count=0;
         
         clearStr(tmpStr);
         clearStr(tagStr);
         clearStr(dataStr);
         client.stop();
         client.flush();
         Serial.println("disconnecting.");
       }
        
     }
     clearStr(tmpStr);
     clearStr(tagStr);
     clearStr(dataStr);
     tagFlag = false;
     dataFlag = false;
  }
    


}


void clearStr (char* str) {
  int len = strlen(str);
  for (int c = 0; c < len; c++) {
     str[c] = 0;
  }
}


void addChar (char ch, char* str) {
  char *tagMsg  = "<ERROR>";
  char *dataMsg = "-ERROR";

 
  if (strlen(str) > MAX_STRING_LEN - 2) {
     if (tagFlag) {
        clearStr(tagStr);
        strcpy(tagStr,tagMsg);
     }
     if (dataFlag) {
        clearStr(dataStr);
        strcpy(dataStr,dataMsg);
     }
     clearStr(tmpStr);
     tagFlag = false;
     dataFlag = false;

  } 
  else {
     str[strlen(str)] = ch;
  }
}

boolean matchTag (char* searchTag) {
  if ( strcmp(tagStr, searchTag) == 0 ) {
     return true;
  } else {
     return false;
  }
}


void devicescontrol(int devicescount, char *devicestate)
{
  if(!strncmp("ON",devicestate,2))
  {
    Serial.print("on..........on......");
    Serial.println(devicescount);
    digitalWrite(devices[devicescount-1],HIGH);
  }
  else if(!strncmp("OFF",devicestate,3))
  {
    Serial.print("off......off.......");
    Serial.println(devicescount);
    digitalWrite(devices[devicescount-1],LOW);
  }
  
} 
