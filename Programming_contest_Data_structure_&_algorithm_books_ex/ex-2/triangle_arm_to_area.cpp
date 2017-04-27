#include <stdio.h>
#include <math.h>

int main()
{
    double s, area, a,b,c;

    scanf("%lf %lf %lf", &a, &b, &c);

    s = (a+b+c)/2;

    area = sqrt(s*(s-a)*(s-b)*(s-c));


    printf("%lf\n", area);


    return 0;
}

