import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

/**
 * Created by elabassi on 26/10/15.
 */
public class AfficheBits extends JFrame {
    JTextField champSortie;

    public AfficheBits(){
        Container conteneur = getContentPane();
        conteneur.setLayout(new FlowLayout());
        conteneur.add(new JLabel("Entrez un entier: "));
        JTextField champEntree = new JTextField(10);
        champEntree.addActionListener(
                new ActionListener() {
                    @Override
                    public void actionPerformed(ActionEvent e) {
                        int valeur = Integer.parseInt(
                                e.getActionCommand());
                        champSortie.setText(obtenirBits(valeur));
                    }
                }
        );
        conteneur.add(champEntree);
        conteneur.add(new JLabel("L'entier en bits donne "));
        champSortie = new JTextField(33);
        champSortie.setEditable(false);
        conteneur.add(champSortie);
        setSize(720, 70);
        setVisible(true);
    }

    private String obtenirBits(int valeur){
        //1 comme bit gauche et des 0 ailleur
        int masqueAffichage = 1 << 31;
        //tampon pour constituer la sortie
        StringBuffer tampon = new StringBuffer(35);
        for(int bit = 1; bit <= 32; bit++){
            tampon.append((valeur & masqueAffichage) == 0 ? '0' : '1');
            valeur <<= 1;
            if (bit % 8 == 0){
                tampon.append(' ');
            }
        }
        return tampon.toString();
    }
}
