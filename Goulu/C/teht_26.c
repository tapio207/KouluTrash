#include <stdio.h>

int main()
{
 printf("Tekstit poistetaan seuraavalla cls-funktiolla.");
 printf("Kursori palautuu alkuun ja seuraava printf tulostaa normaalisti.");
 system("cls");
 printf("Toinen testiteksti");
 
 getch();
 return 0;
}