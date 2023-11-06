#include <stdio.h>
#include <stdlib.h>

struct Elemento {
  int dado;
    struct Elemento *esq;
    struct Elemento *dir;
  };
typedef struct Elemento *Arvore;

Arvore criaArvore(){
  return NULL;
}

void insereArvore(Arvore *a, int valor){
  if ((*a) == NULL){
    (*a) = (Arvore)malloc(sizeof(struct Elemento));
    (*a) -> dado = valor;
    (*a) -> esq = NULL;
    (*a) -> dir = NULL; }
    
  else if (valor < (*a) -> dado)
  insereArvore(&((*a) -> esq), valor);
    
  else if (valor > (*a) -> dado) 
  insereArvore(&((*a) -> dir), valor);
    
  else 
  printf("\nValor ja existe... tente outro.\n");
}

Arvore buscaArvore(Arvore a, int valor){
  if (a == NULL)
    return NULL;
    
  else if (valor < a -> dado)
  return buscaArvore(a -> esq, valor);
    
  else if (valor > a -> dado)
  return buscaArvore(a -> dir, valor);
    
  else
  return a;
}

void preOrdem(Arvore a){
  if (a != NULL) {
    printf("\n%d", a->dado);
    preOrdem(a->esq);
    preOrdem(a->dir); }}

void inOrdemCresc(Arvore a){
  if (a != NULL) {
    inOrdemCresc(a->esq);
    printf("\n%d", a->dado);
    inOrdemCresc(a->dir); }}

void posOrdem(Arvore a){
  if (a != NULL) {
    posOrdem(a->esq);
    posOrdem(a->dir);
    printf("\n%d", a->dado);}}

void antecessor(Arvore a, Arvore *x) {
    Arvore aux;
    if ((*x)->dir != NULL) {
        antecessor(a, &((*x)->dir));
    } else {
        a->dado = (*x)->dado;
        aux = *x;
        *x = aux->esq;
        free(aux); }}

int retiraArvore(Arvore *a, int valor) {
    Arvore aux;
    if (*a != NULL) {
        if (valor > ((*a)->dado)) {
            return retiraArvore(&((*a)->dir), valor);
        } else if (valor < ((*a)->dado)) {
            return retiraArvore(&((*a)->esq), valor);
        } else {
            if ((*a)->dir == NULL) {
                aux = (*a);
                *a = aux->esq;
                free(aux);
            } else if ((*a)->esq == NULL) {
                aux = (*a)->dir;
                free(*a);
                *a = aux;
            } else {
                antecessor(*a, &((*a)->esq));
            }
            return 1; 
        }
    }
    return 2;
}

int main(void) {
    Arvore a;
    int num = 1, n = 1, e, r;
  
    a = criaArvore();
    while (num != 0) {
        
        printf("\ndigite qual operacao deseja realizar\n1-inserir elemento na arvore\n2-retirar elemento da arvore\n3-buscar elemento na arvore\n4-imprimir elementos da arvore\ndigite 0 para parar\n");
        scanf("%d", &num);

        if (num == 1) {
            printf("qual elemento voce gostaria de adicionar:\n");
            scanf("%d", &e);
            insereArvore(&a, e);
        }

        if (num == 2) {
            printf("qual elemento voce gostaria de retirar:\n");
            scanf("%d", &e);
            r = retiraArvore(&a, e);
            if (r == 1)
                printf("elemento retirado");
            else
                printf("elemento nao encontrado");
        }

        if (num == 3) {
            printf("qual elemento voce gostaria de buscar:\n");
            scanf("%d", &e);
            if (buscaArvore(a, e) != NULL){
                printf("elemento encontrado na arvore");
                printf("\n"); }
            else {
                printf("elemento nao encontrado na arvore");
                printf("\n"); }

        }

        if (num == 4) {
            while (n != 0) {
                printf("em que ordem voce gostaria de imprimir os elementos da arvore?\n1-pre-ordem\n2-ordem crescente\n3-pos-ordem\ndigite 0 para sair\n");
                scanf("%d", &n);

                if (n == 1) {
                    preOrdem(a);
                  printf("\n");
                }

                if (n == 2) {
                    inOrdemCresc(a);
                    printf("\n");
                }

                if (n == 3) {
                    posOrdem(a);
                    printf("\n");
                }
            }
        }
    }
    return 0;
}