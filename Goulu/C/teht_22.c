/* funktio palauttaa arvon */

#include <stdio.h>
int jakolasku(int jaettava);

int main()
{
  int paluuarvo, parametri;
  scanf("%d", &parametri);
  jakolasku(parametri);
  paluuarvo = jakolasku(parametri);
  printf("Funktio palautti %d\n", paluuarvo);
  
  getch();
  return 0;
}
		
int jakolasku(int jaettava)
{
  int tulos;
  tulos = jaettava / 2;
  return tulos;
}