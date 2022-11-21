#include <stdio.h>

int main() {
    float latitude, longitube;
    char info[80];
    int started = 0;
    puts("data=[");
    while (scanf("%f,%f,%79[^\n]", &latitude, &longitube, info) == 3) {
        if (started)
            printf(",\n");
        else
            started = 1;
        if (latitude < -90 || latitude > 90) {
            fprintf (stderr, "Invalid latitude: %f\n", latitude);
            return 2;
        }
        if (longitube < -180 || longitube >180) {
            fprintf (stderr, "Invalid longitude: %f\n", longitube);
            return 2;
        }
        fprintf (stdout, "{latitude: %f, longitube: %f, info: '%s'}", latitude, longitube, info);
    }
    puts("\n]");
    return 0;
}