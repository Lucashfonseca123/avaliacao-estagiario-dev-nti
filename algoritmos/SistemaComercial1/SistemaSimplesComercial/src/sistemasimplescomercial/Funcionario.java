
package sistemasimplescomercial;

import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Calendar;
import java.util.Date;
import java.util.Scanner;

/**
 *
 * @author Lucas
 */
public class Funcionario {
    
    Produto p1 = new Produto();
    Cliente c1 = new Cliente();
    int totalProdCliente;
    float desconto, tot;
    java.util.Date d = new Date();
    String data = java.text.DateFormat.getDateInstance(DateFormat.MEDIUM).format(d);
    SimpleDateFormat sdf = new SimpleDateFormat("HH:mm:ss");
    Date hora = Calendar.getInstance().getTime(); 
    String horaFormatada = sdf.format(hora);

    public void vender(){
        int i = 1;
        Scanner s1 = new Scanner(System.in);
        System.out.println("Produto (código): ");
        c1.setCodigo(s1.nextInt());
        while(i<=p1.getCodigo()){
            if(c1.getCodigo() == p1.getCodigo()){
              System.out.println("Quantidade: ");
              c1.setQuantidade(s1.nextInt());
              totalProdCliente ++;
              
            }
            else{
                System.out.println("Produto não cadastrado. ");
                return;
            }
            i++;
        }
    }
    
    public void registrarProdutos(){
        p1.setNome("Banana");
        p1.setCodigo(1);
        p1.setValorUnitario(5);
    }
    
    public void descontar(){
        if(c1.getQuantidade()<=10){
            tot=p1.getValorUnitario();
        }
        if(c1.getQuantidade()>10){
            desconto = (p1.getValorUnitario()*5)/100;
            tot = p1.getValorUnitario()-desconto;        
        }
        if(c1.getQuantidade()>20){
            desconto = (p1.getValorUnitario()*10)/100;
            tot = p1.getValorUnitario()-desconto;        
        }
         if(c1.getQuantidade()>30){
            desconto = (p1.getValorUnitario()*20)/100;
            tot = p1.getValorUnitario()-desconto;        
        }
    }
    
    public void registrar(){
        System.out.println("\n*** REGISTRO DE VENDA ***");
        System.out.println("Numero da venda: "+c1.getCodigo());
        System.out.println("Data: "+data+" "+horaFormatada);
        System.out.println("\nItens: ");
        for(int i=0; i<totalProdCliente; i++){
            System.out.println("\nProduto: "+p1.getNome()+ "\nQuantidade: "+c1.getQuantidade()+"\nValor total: "+tot*c1.getQuantidade()+"\n\n");
        }
    }
    
    public static void main(String[] args) {
        Funcionario f1 = new Funcionario();
        f1.registrarProdutos();
        f1.vender();
        f1.descontar();
        f1.registrar();
        
    }
}
