#include <stdio.h>

float unssit, grammat;
char grammatTuumiksi, unssitgrammoiksi;

int main()
{
printf("Haluatko muuttaa grammat unsseiksi, y/n \n");
scanf("%s", &grammatTuumiksi );

if(grammatTuumiksi == 'y'){
printf("anna grammat jotka muutetaan: \n");
scanf("%f", &grammat);
unssit = (1/28.35 * grammat);
printf("on yhtapaljon kuin %f unssia", unssit);
}
else if(grammatTuumiksi == 'n'){
printf("Haluatko muuttaa unssit grammoiksi?, y/n \n");
scanf("%s", &unssitgrammoiksi );

if(unssitgrammoiksi == 'y'){
	

printf("no muutetaan sitten unssit grammoiksi \n");
printf("anna unssit jotka muutetaan grammoiksi: \n");
scanf("%f" , &unssit);
grammat = (unssit*28.35);
printf("on yhtapaljon kuin %.2f grammaa", grammat);

}
else if(unssitgrammoiksi == 'n'){
for (int x =200; x >=0; x--){
	printf("No ei sitten %d \n", x);
};


}

}
getch();

return 0;
}

