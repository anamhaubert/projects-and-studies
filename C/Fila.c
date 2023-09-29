#include <stdio.h>
#include <stdlib.h>

/*Faça um programa que implemente uma fila com alocação dinâmica, para armazenar números inteiros.

O usuário deve poder incluir quantos elementos desejar na fila.

As opções permitidas para o usuário são:

1 - Inserir um elemento no final da fila

2 - Retirar um elemento do início da fila

3 - Imprimir o conteúdo da fila.*/

struct elemento{
  int dado;
  struct elemento *prox;
};
typedef struct elemento *ApElemento;

typedef struct {
  ApElemento ini;
  ApElemento fim;
} Fila;

Fila criaFila(){
  Fila f;
    f.ini = NULL;
    f.fim = NULL;
  return (f);
}

#define TRUE 1
#define FALSE 0
  
int filaVazia(Fila f) {
  if (f.ini == NULL)
    return (TRUE);
  else
    return (FALSE);
}

void imprimeFila(Fila f) {
  ApElemento ap;
    printf("\nItens da lista\n");
    ap = f.ini;
  
    while (ap != NULL){
      printf("%d - ",ap->dado);
      ap = ap->prox; }
  
    printf("\n");
}

Fila insereFila(Fila f, int e){
  ApElemento novo;
  
    novo = malloc(sizeof(struct elemento));
    novo -> dado = e;
    novo -> prox = NULL;
  
    if (filaVazia(f)){
      f.ini = novo;
      f.fim = novo; }
    else{
      f.fim->prox = novo;
      f.fim = novo; }
  
  return (f);
}

Fila retiraFila (Fila f, int *e){
  ApElemento ap;
  
    if (!filaVazia(f)){
      *e = f.ini->dado;
      ap = f.ini;
      f.ini = f.ini->prox;
      free(ap);
      if (filaVazia(f))
        f.fim = NULL; }
      
    else{
      *e = -1;
      printf("\nFila Vazia"); }
  
  return (f);
}

int main(void) {
  Fila f; int num=1, item;
  
  f = criaFila();

  while (num != 0) {
    printf("\ndigite qual operacao deseja realizar\n1-inserir um elemento no final da fila\n2-retirar o elemento do inicio da fila\n3-imprimir conteúdo da fila\ndigite 0 para parar\n");

    scanf("%d", &num);

    if (num == 1) {
      printf("qual elemento voce gostaria de inserir:\n");
      scanf("%d",&item);
      f = insereFila(f, item);
    }

    if (num == 2) {
      if(!filaVazia(f)){
        printf("\n");
        printf("retirado\n");
        f = retiraFila(f, &item);
      }
      else{
        printf("\n");
        printf("fila vazia\n");
    }}

    if (num == 3)
       imprimeFila(f);
  }
  return 0;
}
