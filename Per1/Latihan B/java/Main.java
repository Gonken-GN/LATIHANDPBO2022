import java.util.Scanner;
import java.util.concurrent.ExecutionException;
public class Main {
    public static void main(String[] args){
        tim sepakbola = new tim();
        Scanner sc = new Scanner(System.in);
        int n = 0, tahunI, i;
        String namaI, negaraI, pelatihI, pemainI;
        System.out.println("Masukkan Nama Tim: ");
        try{
            namaI = sc.next();
            sepakbola.setNama(namaI);
        }catch(Exception e){}
        System.out.println("Masukkan Negara Tim: ");
        try{
            negaraI = sc.next();
            sepakbola.setNegara(negaraI);
        }catch(Exception e){}
        System.out.println("Masukkan Tahun Terbentuknya TIm: ");
        try{
            tahunI = sc.nextInt();
            sepakbola.setTahun(tahunI);
        }catch(Exception e){}
        System.out.println("Masukkan Pelatih Tim: ");
        try{
            pelatihI = sc.next();
            sepakbola.setPelatih(pelatihI);
        }catch(Exception e){}
        System.out.println("Masukkan Nama Pemain: ");
        try{
            pemainI = sc.next();
            sepakbola.setPemain(pemainI);
        }catch(Exception e){}
        System.out.println("");
        
        System.out.println("Nama Tim: " + sepakbola.getNama());
        System.out.println("Negara Tim: " + sepakbola.getNegara());
        System.out.println("Tahun Tim: " + sepakbola.getTahun());
        System.out.println("Pelatih Tim: " + sepakbola.getPelatih());
        System.out.println("Nama Pemain: " + sepakbola.getPemain());
        
        

    }
}
