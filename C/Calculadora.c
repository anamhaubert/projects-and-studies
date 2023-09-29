/*
  Exercício 1:
  - Implemente uma função que receba dois números, e retorne a soma dos dois;
  - Implemente uma função que receba dois números, e retorne o produto dos dois;
  - Implemente uma função que receba dois números, e retorne a diferença entre o
  primeiro e o segundo;
  - Implemente uma função que receba dois números, e retorne o resultado da
  divisão do primeiro pelo segundo;
  - Implemente uma função que receba dois números, e um caracter que indique a
  operação ("+", "-", "*" ou "/") e calcule o resultado da operação, chamando as
  funções já implementadas.
  - Implemente o programa principal, que solicita dois números e a operação ao
  usuário, e chama a função que calcula o resultado da operação.*/

#include <stdio.h>

float soma(float *a, float *b) { return *a + *b; }

float produto(float *a, float *b) { return *a * (*b); }

float subtracao(float *a, float *b) { return *a - *b; }

float divisao(float *a, float *b) { 
  if(*b ==0)
   return 1;
  else
    return *a / (*b); }

void erro(){
   printf("divisao por 0\n");
 }

float operacao(float *a, float *b, char *op) {
float x;
  if (*op == '+')
    return soma(a, b);
  
  if (*op == '-')
    return subtracao(a, b);
  
  if (*op == '/'){
    x= divisao(a, b);
      if(x==1) erro();
      else return x;
  }
  
  if (*op == '*')
    return produto(a, b);
}

 
int main() {
  float a, b;
  char op;

  printf("digite dois numeros\n");
  scanf("%f %f", &a, &b);

  printf("digite o operador matematico (+, -, *, /)\n");
  scanf(" %c", &op);

  printf("%.2f %c %.2f = %.2f\n", a, op, b, operacao(&a, &b, &op));

  return 0;
}