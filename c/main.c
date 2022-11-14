#include <stdio.h>

int main() {
    int x, y, d;
    double z;
    printf("аниме x: ");
    scanf("%d", &x);
    printf("аниме y: ");
    scanf("%d", &y);
    printf("Введите действие: \n");
    printf("1 - Сложение\n");
    printf("2 - Вычетание\n");
    printf("3 - Умножение\n");
    printf("4 - Деление\n");
    scanf("%d", &d);

    if ( d == 1){
        z = x + y;
        printf("%d + %d = %f\n", x,y,z);
}
    else if ( d == 2){
        z = x - y;
        printf("%d - %d = %f\n", x,y,z);
}
    else if ( d == 3){
        z = x * y;
        printf("%d * %d = %f\n", x,y,z);
}

    else if ( d == 4){
        if ( y == 0 ){
        printf("Деление на ноль!\n");    
        return 0;
        }
        z = (double)x / y;
        printf("%d / %d = %f\n", x,y,z);
}

    else {
        printf("Неверное действие!\n");
}
    return 0;
}