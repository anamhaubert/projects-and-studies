/*
  Faça um programa que  implementa uma lista com vetores de strings, conforme o
exemplo visto em sala, com as seguintes operações:
1. Inserir elemento
2. Retirar Elemento
3. Criar Lista
4. Contar elementos da lista
5. Exibir o conteúdo da lista

A interface com o usuário deve ser feita pelo programa principal, passando os
parâmetros para as funções que implementam as operações sobre a lista. Enviar o
arquivo fonte em C, funcionando.
*/

#include <stdio.h>
#include <string.h>
#define MaxItens 10
#define TamItem 20

typedef char Lista[MaxItens][TamItem];

void criaLista(Lista l) {
  int i;
  for (i = 0; i < MaxItens; i++)
    l[i][0] = '\0';
}

void imprimeLista(Lista l) {
  int i;
  printf("\nItens da lista\n");
  for (i = 0; i < MaxItens && strlen(l[i]) > 0; i++)
    printf("\n%s", l[i]);
}

int contaLista(Lista l) {
  int i;
  for (i = 0; i < MaxItens && strlen(l[i]) > 0; i++)
    ;
  return (i);
}

void insereLista(Lista l, char *item) {
  int i;
  for (i = 0; i < MaxItens && strlen(l[i]) > 0; i++)
    ;

  if (i < MaxItens) {
    strcpy(l[i], item);
    printf("\nItem (%s) inserido com sucesso\n", item);
  }

  else
    printf("\nLista cheia, não pode inserir\n");
}

void retiraLista(Lista l, char *item) {
  int i;
  for (i = 0; i < MaxItens && strlen(l[i]) > 0 && (strcmp(l[i], item) != 0);
       i++)
    ;

  if (i < MaxItens && (strcmp(l[i], item) == 0)) {
    printf("\nItem (%s) encontrado, removendo", item);

    if (i < (MaxItens - 1)) {
      for (; i < (MaxItens - 1) && strlen(l[i]) > 0; i++)
        strcpy(l[i], l[i + 1]);
    }

    l[MaxItens - 1][0] = '\0';
  }

  else
    printf("\nItem (%s) não encontrado", item);
}

int main() {
  Lista L1;
  int num = 1;
  char item[TamItem];

  criaLista(L1);

  while (num != 0) {
    printf("\ndigite qual operacao deseja realizar\n1-inserir "
           "elemento\n2-retirar elemento\n3-contar elementos da "
           "lista\n4-exibir conteudo da lista\ndigite 0 para parar\n");

    scanf("%d", &num);
    getchar();

    if (num == 1) {
      printf("qual item voce gostaria de adicionar:\n");
      fflush(stdin);
      fgets(item, TamItem, stdin);
      insereLista(L1, item);
    }

    if (num == 2) {
      printf("qual item voce gostaria de retirar:\n");
      fflush(stdin);
      fgets(item, TamItem, stdin);
      retiraLista(L1, item);
    }

    if (num == 3)
      printf("Número de elementos na lista: %d\n", contaLista(L1));

    if (num == 4)
      imprimeLista(L1);
  }

  return 0;
}