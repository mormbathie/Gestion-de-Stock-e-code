package sn.unipro;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;

public class App {
    public  static void main(String[]args){
       /* SommeApplet interf = new SommeApplet();
        interf.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        interf.setSize(250,150);
        interf.setVisible(true);
        interf.setLocationRelativeTo(null);*/
        JFrame F=new JFrame("COMPARAISON");
        JPanel panel1=new JPanel(new GridLayout(2,2));
        JPanel panel2=new JPanel(new GridLayout(3,2));
        F.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        JButton Bs=new JButton("Plus Grand");

        JTextField J1 = new JTextField();
        JTextField J2 = new JTextField();
        JTextField J3 = new JTextField();
        F.setSize(400,400);
        Bs.setBounds(150,150,100,50);
        J1.setBounds(50,50,50,30);
        J2.setBounds(50,100,50,30);
        J3.setBounds(150,80,100,30);
        F.add(Bs);
        F.add(J1);
        F.add(J2);
        F.add(J3);
        F.setLayout(null);
        F.setVisible(true);
        Bs.addActionListener((ActionEvent e)->{
            int C1 = Integer.parseInt(J1.getText());
            int C2 = Integer.parseInt(J2.getText());

            if (C1>C2){
                J3.setText(Integer.toString(C1));
            }else if (C2>C1){
            J3.setText(Integer.toString(C2));
            }else if (C1==C2){
                J3.setText("Sont egaux");
            }
        });

    }
}
