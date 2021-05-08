#include <AFMotor.h>
#include <SoftwareSerial.h>

SoftwareSerial s(6,5);
AF_DCMotor motor1(3);
AF_DCMotor motor2(4);
int data = 0;

void setup()
{
  Serial.begin(9600);
  s.begin(9600);
}
void loop()
{
  data = s.read();
  motor1.setSpeed(255);
  motor1.run(FORWARD);
  motor2.setSpeed(255);
  motor2.run(FORWARD);
}
