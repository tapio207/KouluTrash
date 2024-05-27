#include <stdio.h>

int main()
{
  int luku1;
  printf(" Anna luku valilta 1 - 100: ");
  scanf("%i",&luku1);
 
  if(luku1 < 30 )
    printf("arvosanasi on 0");
  if(luku1 >=30 && luku1 <53)
    printf("arvosanasi on 1");
	if(luku1 >=53 && luku1 <76)
	printf("arvosanasi on 2");
	if(luku1 >=76 && luku1 <100)
	printf("arvosanasi on 3");
 
  getch();
  return 0;
}
