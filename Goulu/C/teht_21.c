
#include<stdio.h>
 int esimerkki();     /* aliohjelman esittely */
 
 int main()
 {
  printf("Paaohjelmassa \n\n");

  esimerkki();         /* aliohjelma-kutsu, siirrytään aliohjelmaan */

  printf("\n\nOllaan taas paaohjelmassa");
  getch();
  return 0;
 }
 
 int esimerkki()      /* aliohjelman määrittely */
 {
  printf("Anna kolme arvoa\n");
  int x, y, z;
  scanf("%d %d %d", &x, &y, &z);
  int lasku;
  lasku = (x + y + z / 3);
  printf("vastaus: %d", lasku);
  return 0;
 }