#include <stdio.h>

int main()
{
  int x=1, rivi, lukujenmaara=0;
  float lukuja[10], luku;

  for (rivi = 0; rivi <= 9; rivi++)
  {
    printf("Anna %d. luku: \n", x);
    x++;
    scanf("%f",&lukuja[rivi]);
    lukujenmaara++;
  }
  
  for (rivi = 0; rivi <= 9; rivi++)
  {
    printf("%.2f  \n", lukuja[rivi]);
  } 
  
  for (int y=lukujenmaara; y >=0; y--)
  {
  luku= (luku + lukuja[y]);
  printf ("%.2f \n", luku);
  }	
  float keskiarvo =(luku/lukujenmaara);
  printf("keskiarvo on: %.1f\n", keskiarvo);
  
  
  getch();
  return 0;
}