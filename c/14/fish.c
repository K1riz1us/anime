#include <stdio.h>
#include "fish.h"

void catalog(fish f) {
    printf("%s - eto %s c %i zubami. Emy %i goda\n", f.name, f.species, f.teeth, f.age);
}

void label(struct fish a) {
    printf("Klichka:%s\nPaznovidnost:%s\n%i goda, %i zubov\n", a.name, a.species, a.age, a.teeth);
    printf("Davat %2.2f kg %s i pazpeshat %s na protyazhenii %2.2f chasov\n", a.care.food.weight, a.care.food.ingredients, a.care.exercise.description, a.care.exercise.duration);
}