#include <stdio.h>

int main(){
    float latitude, longitube;
    char info[80];
    while (scanf("%f,%f,%79[^\n]", &latitude, &longitube, info) == 3) {
        if ((latitude > 26) && (latitude < 34)){
            if ((longitube > -76) && (longitube < -64)){
                printf ( "%f, %f, %s\n", latitude, longitube, info);
            }

        }
    }
    return 0;
}