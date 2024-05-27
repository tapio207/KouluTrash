/* Piste-taulukon välittäminen aliohjelmaan */

#include <stdio.h>
int laske(int lista[]);
const int MAX = 5;
float valiLuku;

int main()
{
  int counter = 0, lista[5], yhteispisteet;
  do
  {
    printf("Anna %d. pisteet: \n", counter +1);
    scanf("%f", &valiLuku );
    valiLuku = valiLuku * 1000;
    lista[counter++] = valiLuku;
  }
  while (counter < MAX);
  yhteispisteet = laske(lista);
  valiLuku = yhteispisteet / 1000;
  printf("\nYhteispisteet ovat: %f\n", valiLuku);

  getch();
  return 0;
}

int laske(int lista[])
{
   int rivi, tulos;
   for (rivi=0; rivi< MAX; rivi++)
	tulos = tulos + (lista[rivi]);
   return tulos;
}