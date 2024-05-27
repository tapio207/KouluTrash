#include <stdio.h>

int main()
{
  float numerot[3][6];

  printf("Anna luku: ");
  scanf("%f", &numerot[0][0]);
  printf("Anna luku: ");
  scanf("%f", &numerot[0][1]);
  printf("Anna luku: ");
  scanf("%f", &numerot[0][2]);
  printf("Anna luku: ");
  scanf("%f", &numerot[0][3]);
    printf("Anna luku: ");
  scanf("%f", &numerot[0][4]);

	numerot[0][5] = (numerot[0][0]+numerot[0][1]+numerot[0][2]+numerot[0][3]+numerot[0][4]);

  printf("Anna luku: ");
  scanf("%f", &numerot[1][0]);
  printf("Anna luku: ");
  scanf("%f", &numerot[1][1]);
  printf("Anna luku: ");
  scanf("%f", &numerot[1][2]);
  printf("Anna luku: ");
  scanf("%f", &numerot[1][3]);
    printf("Anna luku: ");
  scanf("%f", &numerot[1][4]);
  
  numerot[1][5] = (numerot[1][0]+numerot[1][1]+numerot[1][2]+numerot[1][3]+numerot[1][4]);
  
printf("Anna luku: ");
  scanf("%f", &numerot[2][0]);
  printf("Anna luku: ");
  scanf("%f", &numerot[2][1]);
  printf("Anna luku: ");
  scanf("%f", &numerot[2][2]);
  printf("Anna luku: ");
  scanf("%f", &numerot[2][3]);
    printf("Anna luku: ");
  scanf("%f", &numerot[2][4]);
  
   numerot[2][5] = (numerot[2][0]+numerot[2][1]+numerot[2][2]+numerot[2][3]+numerot[2][4]);

  printf("\n%f %f %f %f %f %f \n",
            numerot[0][0],numerot[0][1],
            numerot[0][2],numerot[0][3],
            numerot[0][4],numerot[0][5]);
  printf("%f %f %f %f %f %f \n",
            numerot[1][0],numerot[1][1],
            numerot[1][2],numerot[1][3],
            numerot[1][4],numerot[1][5]);
      printf("%f %f %f %f %f %f \n",
            numerot[2][0],numerot[2][1],
            numerot[2][2],numerot[2][3],
            numerot[2][4],numerot[2][5]);
    
   float keskiarvo=(numerot[0][5]+numerot[1][5]+numerot[2][5]/5);
   printf ("keskiarvo on %.2f",keskiarvo);

  printf("\n");

  printf("Taulukossa 1.rivilla ja sarakkeeessa 3 on luku %f",
  numerot[1][3]);

getch ();
  return 0;
}
