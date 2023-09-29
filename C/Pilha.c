/*
Implementar um programa que gerencia uma lista encadeada ordenada com alocação dinâmica.

Cada elemento da lista deve conter um número inteiro.

Os elementos devem ser inseridos em ordem crescente. Por exemplo, de for inserida a sequência 5, 3, 9, 4, ao imprimir o conteúdo da lista, deve aparecer 3, 4, 5, 9.

O programa deve oferecer ao usuário as operações:

- Inserir elemento na lista;

- Retirar elemento da lista;

- Buscar um elemento informado está na lista, retornando o endereço do elemento se ele existir na lista, ou NULL se não existir;

- Imprimir o conteúdo da lista;

- Contar o número de elementos da lista.
*/

#include <stdio.h>
#include <stdlib.h>
#define MaxItens 10

struct elemento {
    int dado;
    struct elemento *prox;
};

typedef struct elemento Nodo;

Nodo n;
Nodo *p;
Nodo *l1;

typedef Nodo *Lista;

Lista l1, l2, l3;

Lista criaLista()
{
  return NULL;
}

void imprimeLista(Lista l)
{
  Lista p;
  
  printf("\nItens da lista\n");
  p = l;
  
  while (p != NULL)
  {
    printf("%d - ",p->dado);
    p = p->prox;
  }
  
  printf("\n"); 
}

int contaLista(Lista l)
{
  Lista p;
  int cont = 0;
  
  p = l;
  
  while (p != NULL)
  {
    cont++;
    p = p->prox;
  }
  
  return cont;
}

Lista buscaLista(Lista l, int e)
{
  Lista p;
  
  p = l; 
  
  while ((p != NULL) && (p->dado != e))
  {
    p = p->prox;
  }
  
  return (p);
}

Lista insereLista(Lista l, int e)
{
    Lista novo, atual, anterior;

    novo = malloc(sizeof(struct elemento));
    novo->dado = e;
    anterior=l; atual=l;
  
    while((atual != NULL)&&(atual->dado<e)){
      anterior=atual;
      atual=atual->prox;
    }

    if (atual != anterior)
      anterior->prox = novo;
  
    else l = novo;
  
    novo->prox = atual;
    return l;
}

Lista retiraLista (Lista l, int e)
{
  Lista p, ant; 
  p=l;
  ant=l;
  
  while ((p!=NULL) && (p->dado != e)){ 
    ant = p;
    p = p->prox;
  }
  
  if (p!=NULL){ 
    if (p == ant) {
    l = p->prox;
    free (p);
    }
      
    else {
    ant->prox = p->prox;
    free(p);
    }
  }                                              
  return(l);
}

int main(void) {
Lista lista1; 
int num =1,item;
  
lista1 = criaLista();

  while (num != 0) {
    printf("\ndigite qual operacao deseja realizar\n1-inserir elemento\n2-retirar elemento\n3-contar elementos da lista\n4-exibir conteudo da lista\n5-buscar elemento na lista\ndigite 0 para parar\n");

    scanf("%d", &num);

    if (num == 1) {
      printf("qual item voce gostaria de adicionar:\n");
      scanf("%d",&item);
      lista1 = insereLista(lista1, item);
    }

    if (num == 2) {
      printf("qual item voce gostaria de retirar:\n");
      scanf("%d",&item);
      lista1 = retiraLista(lista1, item);
    }

    if (num == 3)
      printf("Número de elementos na lista: %d\n", contaLista(lista1));

    if (num == 4)
      imprimeLista(lista1);

    if(num==5){
      printf("qual item voce gostaria de buscar:\n");
      scanf("%d",&item);
      Lista endereco = buscaLista(lista1, item);

      if(endereco != NULL)
      printf("o endereço do item é %p\n",endereco);

      else printf("o elemento nao foi encontrado na lista\n");
  }  }  
  
  return 0;
}
