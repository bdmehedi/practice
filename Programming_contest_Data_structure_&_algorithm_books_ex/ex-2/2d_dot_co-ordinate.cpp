/*

| Programming contest data structture & algorithm books ex2.
| 2D dot co-ordinate distance programm

*/


#include <stdio.h>
#include <math.h>

int main()
{
    double x1, x2, y1, y2, d;

    scanf("%lf %lf\n", &x1, &y1);
    scanf("%lf %lf", &x2, &y2);
    d = sqrt(pow((x2 - x1), 2) + pow((y2 - y1), 2));
    printf("\n%lf\n", d);

    return 0;
}
