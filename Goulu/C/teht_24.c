/* taulukon siirtäminen aliohjelmaan */

#include <stdio.h>
int aliohjelma(int taulukko[2][3]);

int main()
{
  int taulukko[2][3] = {1, 2, 3, 4, 5, 6};
  
  aliohjelma(taulukko);

  getch();
  return 0;
}

int aliohjelma(int taulukko[2][3])
{
  printf("Aliohjelmassa \n\n");
  printf("%d\n%d\n%d\n", taulukko[0][0],taulukko[0][1],taulukko[0][2]);
  printf("%d\n%d\n%d\n", taulukko[1][0],taulukko[1][1],taulukko[1][2]);
  return 0;
}