/* Liukulukumuuttujien käyttö */

#include <stdio.h>

int main()
{
  float keskiarvo;
  float paino1, paino2, paino3;

  printf(”Anna ensimmäinen paino\n”);
  scanf(”%f”, &paino1);

  printf(”Anna toinen ja kolmas paino\n”);
  scanf(”%f %f”,&paino2, &paino3);

  keskiarvo = (paino1 + paino2 + paino3) / 3;

  printf(”Painojen keskiarvo on %.2f\n”, keskiarvo);

  getch();
  return 0;
}