/*
<applet code="AutoBuyClient" width="400" height="400">
</applet>
*/
//package sock;
import java.applet.Applet;
import java.applet.AudioClip;
import java.net.*;
import java.io.*;
import javax.swing.*;
import java.awt.*;
import java.awt.event.*;
import java.awt.image.*;
import sun.security.krb5.internal.HostAddress;

public class AutoBuyClient  extends JApplet implements ActionListener
{
    static int tval=1;
 static JLabel jl=null;
 static JPanel jp=null,jp1=null;
 static JTextField jt=null,jt2=null,jt4=null,jtcity=null;
 static JLabel jt3=null;
 static JTextArea jt1=null;
 static JButton jb=null,jb1=null,jb2=null,jb3=null;
 static Socket s=null,s2=null;
 static PrintWriter out=null;
 static BufferedReader br=null,br2=null;
 static JScrollPane sbrText;
 static ImageIcon icon1,icon2,icon3,icon4,icon5,ic;
 static JLabel j1=null,j2=null,j3=null,j4=null,j5=null,j6=null,j7=null,j8=null,j9=null,j10=null,j11=null,j12=null,j13=null,j14=null,j15=null,j16=null,j17=null;
 static JLabel j18=null,j19=null,j20=null,j21=null,j22=null,j23=null,j24=null,j25=null,j26=null,j27=null,j28=null,j29=null,j30=null,j31=null,j32=null,j33=null,j34=null;
 static JPanel jph=null;
 static JLabel j35=null,j36=null,j37=null,j38=null,j39=null,j40=null,j41=null,j42=null;
static JLabel jmin=null;
 Container cp;
 JPanel jpa1=null,jpa2=null,jpa3=null,jpa4=null,jpa5=null,jpim=null;
 static JLabel jim1=null,jim2=null,jim3=null,jim4=null,jim5=null;
static JLabel ju1=null,ju2=null,ju3=null;
static URL url;
static JLabel jm=null;
static AudioClip audioClip1;
  static AudioClip audioClip2;
   static AudioClip audioClip3;
    static AudioClip audioClip4;
     static AudioClip audioClip5;
   static AudioClip audioClip6;
   static int flag=0;






 public void init()
    {
    //String uid = getParameter("uid");
   // String uid = "arif.kamal@srishtis.com";

   // String uc = "ariftest";
  // String us = "ariftest";
   //String uz = "ariftest";
   //String ucity="city";
   String uc = getParameter("uc");
    String us = getParameter("us");
    String uz = getParameter("uz");
    String uid = getParameter("uid");
    String ucity=getParameter("ucity");
   String access =getParameter("access");
   //String access="JUNKYARD";
//System.out.println("hii");
audioClip1 = getAudioClip(getCodeBase(), "1.wav");

System.out.println("hii2");
   audioClip2 = getAudioClip(getCodeBase(), "2.wav");
   audioClip3 = getAudioClip(getCodeBase(), "3.wav");
   audioClip4 = getAudioClip(getCodeBase(), "4.wav");
   audioClip5 = getAudioClip(getCodeBase(), "5.wav");
  audioClip6 = getAudioClip(getCodeBase(), "Blip.wav");

audioClip6.play();
    url=getCodeBase();

    cp=getContentPane();
    //String cvalue="#A8B7D2";
    Font myFont = null;
    
    //int red = Integer.parseInt(cvalue.substring(1,3),16);
    //int green = Integer.parseInt(cvalue.substring(3,5),16);
    //int blue = Integer.parseInt(cvalue.substring(5,7),16);
    cp.setBackground(Color.decode("#A1BDEA"));
     // this.setVisible(false);
    //setLayout(new GridLayout(0,1));
    jt1=new JTextArea(40,40);
    jt=new JTextField("Start");
    jb=new JButton("POST");
    jt1.append("Initializing...");
    jt1.setEditable(false);
    jt1.setLineWrap(true);
    sbrText = new JScrollPane(jt1);
    jb1=new JButton("ok");
    jb2=new JButton("ok");
    jb3=new JButton("ok");
    jtcity=new JTextField(ucity);
    jmin = new JLabel();




    setLayout(null);
    setSize(1050,700);
    setBackground(Color.WHITE);
    jpa1=new JPanel();
    jpa1.setLayout(null);
    jpa1.setBackground(Color.decode("#A1BDEA"));
    jpa1.setBounds(800, 300, 300, 400);
    add(jpa1);
    sbrText.setBounds(00, 0, 250, 280);
    jpa1.add(sbrText);
    jpa1.add(jt);
    jt.setBounds(0, 280, 130 , 30);
    jpa1.add(jb);
    jb.setBounds(130,280,120,30);
    jpa1.add(jb1);
    jb1.setBounds(0,310,250,30);
    jpa1.add(jb2);
    jb2.setBounds(0,340,250,30);
    jpa1.add(jb3);
    jb3.setBounds(0,370,250,30);


  try{ ic = new ImageIcon(new URL(getCodeBase()+"banner_bid_online.gif"));
  }catch(Exception e){}
    jph=new JPanel();

    jm=new JLabel(ic);
   jph.setLayout(null);
   jph.setBounds(0, 0, 1100, 150);
   add(jph);
   jm.setBounds(0,0,1100,150);
   jph.add(jm);


    jpa2=new JPanel();
     Font f2 = new Font("serief", Font.PLAIN, 23);
     Font f3 = new Font("serief", Font.PLAIN, 20);
 
    jpa2.setLayout(null);
    jpa2.setBackground(Color.decode("#0080AB"));
    jpa2.setBounds(0, 150, 1100, 100);
    add(jpa2);
    jt3=new JLabel(uid);
    jt3.setForeground(Color.red);
    ju1=new JLabel(uc);
    ju2=new JLabel(us);
    ju3=new JLabel(uz);

     //jt3.setVisible(false);
    jpa2.add(jt3);
    jt3.setBounds(10, 10, 400, 25);
    jpa2.add(ju1);
       jt3.setFont(f2);
       ju1.setFont(f3);
       ju2.setFont(f3);
       ju3.setFont(f3);

    jpa2.add(ju2);
    jpa2.add(ju3);
    ju1.setBounds(10, 35, 100, 25);
    ju2.setBounds(10, 60, 100, 25);
    ju3.setBounds(160, 60, 100, 25);







    j11=new JLabel("");
    j13=new JLabel("");



    jpa3=new JPanel();
    jpa3.setLayout(new FlowLayout(30, 60, 10));
    jpa3.setBackground(Color.decode("#0060AB"));
    
     Font f = new Font("serief", Font.PLAIN, 33);
     //Color c=new Color(872);
    jpa3.setBounds(0, 250, 1100, 50);
    add(jpa3);
    j10=new JLabel("2009");
    jpa3.add(j10);
   // j10.setBounds(10, 30, 75, 30);
    jpa3.add(j11);
    jpa3.add(j13);
    j10.setForeground(Color.WHITE);
    j11.setForeground(Color.WHITE);
    j13.setForeground(Color.WHITE);

    j11.setFont(f);
    j13.setFont(f);
    j10.setFont(f);
   // j11.setBounds(105, 30, 220, 30);
   // j13.setBounds(340, 30, 100, 30);

     jpim=new JPanel();
     try{
        
//jt1.append(""+url);
        // System.out.println(url);
     icon1 = new ImageIcon();

         icon2 = new ImageIcon();
     icon3 = new ImageIcon();
     icon4 = new ImageIcon();
     icon5 = new ImageIcon();
    
     }catch(Exception e){}

     jim1=new JLabel(icon1);
     jim2=new JLabel(icon2);
     jim3=new JLabel(icon3);
     jim4=new JLabel(icon4);
     jim5=new JLabel(icon5);
     jpim.setLayout(new FlowLayout());
     jpim.setBackground(Color.WHITE);
     jpim.setBounds(0, 300, 800, 120);
     add(jpim);
     jpim.add(jim1);
     jpim.add(jim2);
     jpim.add(jim3);
     jpim.add(jim4);
     jpim.add(jim5);



    jpa4=new JPanel();
    jpa4.setLayout(null);
    jpa4.setBackground(Color.decode("#0060AB"));
    jpa4.setBounds(0, 420, 250,280);
    add(jpa4);
         j18=new JLabel("Actual Value :");
         j19=new JLabel("Repair Cost :");
         j20=new JLabel("Primary Damage :");
         j21=new JLabel("Secondary Damage :");
         j22=new JLabel("Vin :");
         j23=new JLabel("Body Style :");
         j24=new JLabel("Color :");
         j25=new JLabel("Engine :");
         j26=new JLabel("Drive :");
         j27=new JLabel("Cylinder :");
         j28=new JLabel("Fuel :");
         j29=new JLabel("Keys :");
         j30=new JLabel("");
         j31=new JLabel("");
         j32=new JLabel("");
         j33=new JLabel("");
         j34=new JLabel("");
         j35=new JLabel("");
         j36=new JLabel("");
         j37=new JLabel("");
         j38=new JLabel("");
         j39=new JLabel("");
         j40=new JLabel("");
         j41=new JLabel("");
         j7=new JLabel("Odometer :");
          j16=new JLabel("");
         jpa4.add(j18);
         jpa4.add(j19);
         jpa4.add(j20);
         jpa4.add(j21);
         jpa4.add(j22);
         jpa4.add(j23);
         jpa4.add(j24);
         jpa4.add(j25);
         jpa4.add(j26);
         jpa4.add(j27);
         jpa4.add(j28);
         jpa4.add(j29);
         jpa4.add(j7);
          j18.setBounds(170, 10,85,20);
                 j19.setBounds(175, 30,85,20);
                 j20.setBounds(145, 50,105,20);
                 j21.setBounds(128, 70,130,20);
                 j22.setBounds(221, 90,85,20);
                 j23.setBounds(180, 110,85,20);
                 j24.setBounds(208, 130,85,20);
                 j25.setBounds(200, 150,85,20);
                 j26.setBounds(208, 170,85,20);
                 j27.setBounds(190, 190,85,20);
                 j28.setBounds(212, 210,85,20);
                 j29.setBounds(210, 230,85,20);
                 j7.setBounds(180, 250,85,20);



    jpa5=new JPanel();
    jpa5.setLayout(null);
    jpa5.setBackground(Color.decode("#E9E9E9"));
    jpa5.setBounds(250, 420, 550, 280);
    add(jpa5);
                 jpa5.add(j30);
                 jpa5.add(j31);
                 jpa5.add(j32);
                 jpa5.add(j33);
                 jpa5.add(j34);
                 jpa5.add(j35);
                 jpa5.add(j36);
                 jpa5.add(j37);
                 jpa5.add(j38);
                 jpa5.add(j39);
                 jpa5.add(j40);
                 jpa5.add(j41);
                 j15=new JLabel();
                 jpa5.add(j15);

                 j30.setBounds(10, 10,85,20);
                 j31.setBounds(10, 30,85,20);
                 j32.setBounds(10, 50,85,20);
                 j33.setBounds(10, 70,85,20);
                 j34.setBounds(10, 90,85,20);
                 j35.setBounds(10, 110,85,20);
                 j36.setBounds(10, 130,85,20);
                 j37.setBounds(10, 150,85,20);
                 j38.setBounds(10, 170,85,20);
                 j39.setBounds(10, 190,85,20);
                 j40.setBounds(10, 210,85,20);
                 j41.setBounds(10, 230,85,20);
                 j15.setBounds(10, 250,85,20);



    try
      {
        //icon = new ImageIcon(new URL(getCodeBase(), getParameter("bgImage")));
      } catch (Exception e) { }
	 //jl=new JLabel(icon);
	 jp=new JPanel();
         jp1=new JPanel();
         jp1.setLayout(null);
        
	 jt2=new JTextField(10);
         

         jt4=new JTextField();
         j1=new JLabel("Title:");
         j2=new JLabel("Year:");
         j3=new JLabel("Make:");
         j4=new JLabel("Facility:");
         j5=new JLabel("Model:");
         j6=new JLabel("Damage:");
           j8=new JLabel("Sale date:");


         j9=new JLabel("");
         j12=new JLabel("");


         j14=new JLabel("");
         //j15=new JLabel("");
        
         j17=new JLabel("");

       
         jb.addActionListener(this);
         jb1.addActionListener(this);
         jb2.addActionListener(this);
         jb3.addActionListener(this);
	
         if(jb3.getText()=="ok")
         {
             jb.setEnabled(false);
             jb1.setEnabled(false);
             jb2.setEnabled(false);
             jb3.setEnabled(false);
             jt.setEnabled(false);

         }
         try
	    {
        //    s=new Socket("127.0.0.1",5000);
             if(access.equals("JUNKYARD"))
             {s=new Socket("72.167.48.115",5000);
                s2=new Socket("72.167.48.115",5001);

               // s=new Socket("127.0.0.1",5000);
               // s2=new Socket("127.0.0.1",5001);
             }
             else
             {
                 s=new Socket("72.167.48.115",5002);
                s2=new Socket("72.167.48.115",5003);

                               //  s=new Socket("127.0.0.1",5002);
                //s2=new Socket("127.0.0.1",5003);

             }
	
	    out=new PrintWriter(s.getOutputStream(),true);
	    br=new BufferedReader(new InputStreamReader(s.getInputStream()));
	    Thread1 th1=new Thread1();
	    Thread th=new Thread(th1);
	    th.start();
	  // s2=new Socket("127.0.0.1",5001);
	   
	    br2=new BufferedReader(new InputStreamReader(s2.getInputStream()));
           
System.out.println(AutoBuyClient.jt.getText());
            
                 Thread2 th2=new Thread2();
	    Thread th22=new Thread(th2);th22.start();
         }
            
	    catch(Exception e)
	    {AutoBuyClient.jt1.append("Server not started..");}

    }


 public void actionPerformed(ActionEvent ae)
    {
    if(ae.getSource()==jb)
       {       //jt.setText(jb1.getText().trim());
       }
    if(ae.getSource()==jb1)
       {
       jt.setText(jb1.getText().trim());
       }
    if(ae.getSource()==jb2)
       {
       jt.setText(jb2.getText().trim());
       }
    if(ae.getSource()==jb3)
       {
       jt.setText(jb3.getText().trim());
       } 
    Thread3 th3=new Thread3();
    Thread th=new Thread(th3);
    th.start();}
    }


class Thread1 implements Runnable
{
    public void run()
      {
	try
        {
	 while(true)
            {
             int temp;
	     String msg=AutoBuyClient.br.readLine();
if(AutoBuyClient.jb3.getText()!="ok")
         {
             AutoBuyClient.jb.setEnabled(true);
             AutoBuyClient.jb1.setEnabled(true);
             AutoBuyClient.jb2.setEnabled(true);
             AutoBuyClient.jb3.setEnabled(true);
             AutoBuyClient.jt.setEnabled(true);

         }

             //System.out.print(msg);
             String str[]=null;
	     while(msg!=null)
		 {
                 str=msg.split(":");AutoBuyClient.jt4.setText(msg);
                 System.out.print(AutoBuyClient.jt4.getText());
                 temp = Integer.parseInt(str[0].trim());
		 AutoBuyClient.jt1.append("\n");
		 AutoBuyClient.jt1.append(msg);System.out.println("**"+msg+"**");
                 AutoBuyClient.jt1.setCaretPosition(AutoBuyClient.jt1.getText().length());
                 temp=temp+25;
                 AutoBuyClient.jb1.setText(String.valueOf(temp));
                 temp=temp+25;
                 AutoBuyClient.jb2.setText(String.valueOf(temp));
                 temp=temp+50;
                 AutoBuyClient.jb3.setText(String.valueOf(temp));
                 
		 msg=null;
         	}
	     }
	}
        catch(Exception e)
	{
            //AutoBuyClient.jt1.append("helooo");
	}
    }
 }


class Thread2 implements Runnable
   {
    public void run()
	{
        String te[]=null;
        try
	   {
	    while(true)
	      {
              String msg=AutoBuyClient.br2.readLine();
             
             //te[1]=null;
             // System.out.print("**");
              te=msg.split(":");
              //System.out.print("*");
             
              while((msg!=null))
		{
 		//AutoBuyClient.jt1.append("\n");
                  //AutoBuyClient.jt1.setText("0");
                 // System.out.print(AutoBuyClient.tval);

if(te[0].equals("5"))
                  {
                      AutoBuyClient.audioClip5.play();
AutoBuyClient.jt1.append("\n"+"Countdown"+te[0]);
		AutoBuyClient.jt1.setCaretPosition(AutoBuyClient.jt1.getText().length());
                  }
                  if(te[0].equals("4"))
                  {
                      AutoBuyClient.audioClip4.play();
AutoBuyClient.jt1.append("\n"+"Countdown"+te[0]);
		AutoBuyClient.jt1.setCaretPosition(AutoBuyClient.jt1.getText().length());
                  }
                  if(te[0].equals("3"))
                  {
                      AutoBuyClient.audioClip3.play();
AutoBuyClient.jt1.append("\n"+"Countdown"+te[0]);
		AutoBuyClient.jt1.setCaretPosition(AutoBuyClient.jt1.getText().length());
                  }
                  if(te[0].equals("2"))
                  {
                      AutoBuyClient.audioClip2.play();
AutoBuyClient.jt1.append("\n"+"Countdown"+te[0]);
		AutoBuyClient.jt1.setCaretPosition(AutoBuyClient.jt1.getText().length());
                  } if(te[0].equals("1"))
                  {
                      AutoBuyClient.audioClip1.play();
AutoBuyClient.jt1.append("\n"+"Countdown"+te[0]);
		AutoBuyClient.jt1.setCaretPosition(AutoBuyClient.jt1.getText().length());
                  }

		
                            // AutoBuyClient.j6.setText(te[1]);
		if(te[1].trim().equals("FINISH"))
                   {
                   AutoBuyClient c = new AutoBuyClient();
                   c.s.close();
                   c.s2.close();
                   AutoBuyClient.jt1.setText("");
                   AutoBuyClient.jt1.append("Bdiiding Finished... Thank you..");
                   }
                if(te[0].trim().equals("1"))
                   {
                    AutoBuyClient.jt1.append("\n");
                    AutoBuyClient.jb.setEnabled(false);
                     AutoBuyClient.jb1.setEnabled(false);
                    AutoBuyClient.jb1.setEnabled(false);
                    AutoBuyClient.jb2.setEnabled(false);
                    AutoBuyClient.jb3.setEnabled(false);
		    if(AutoBuyClient.jt4.getText().equals(""))
                    {
                             AutoBuyClient.jb.setEnabled(false);
                     AutoBuyClient.jb1.setEnabled(false);
                    AutoBuyClient.jb1.setEnabled(false);
                    AutoBuyClient.jb2.setEnabled(false);
                    AutoBuyClient.jb3.setEnabled(false);
                    AutoBuyClient.jt1.append("Prebidder"+"has won the bid ");
                     System.out.println(AutoBuyClient.jt4.getText());
                     AutoBuyClient.flag=1;
AutoBuyClient.audioClip6.play();
 AutoBuyClient.jt1.setCaretPosition(AutoBuyClient.jt1.getText().length());
                    }
                    else
                    {
 AutoBuyClient.jb.setEnabled(false);
                     AutoBuyClient.jb1.setEnabled(false);
                    AutoBuyClient.jb1.setEnabled(false);
                    AutoBuyClient.jb2.setEnabled(false);
                    AutoBuyClient.jb3.setEnabled(false);
                  String temp[]=AutoBuyClient.jt4.getText().split(":");
                  if(Integer.parseInt(temp[0])>Integer.parseInt(AutoBuyClient.jmin.getText()))
		     AutoBuyClient.jt1.append(AutoBuyClient.jt4.getText()+"has won the bid and is approved");
                  else
                      AutoBuyClient.jt1.append(AutoBuyClient.jt4.getText()+"has won the bid and is waiting for approoval ");

                   System.out.println(AutoBuyClient.jt4.getText());
                    AutoBuyClient.flag=1;
AutoBuyClient.audioClip6.play();
 AutoBuyClient.jt1.setCaretPosition(AutoBuyClient.jt1.getText().length());
                    }
AutoBuyClient.jt4.setText("");
AutoBuyClient.jt1.setCaretPosition(AutoBuyClient.jt1.getText().length());

                    break;
                   }
                 System.out.print("*");
         	if(te[0].trim().equals("0"))
		   {
                   //System.out.println(te[1]);
//                   if(te[1].equals("null"))
//                     {
                    //client.jt1.append("hiiiiiiiiiiiiiii");}
//                    else
//                     {
//                    client.jp.setVisible(true);client.jp1.setVisible(true);
//                     }
                    AutoBuyClient.flag=0;
                    AutoBuyClient.jb.setEnabled(true);
                    AutoBuyClient.jb1.setEnabled(true);
                    AutoBuyClient.jb2.setEnabled(true);
                    AutoBuyClient.jb3.setEnabled(true);
 
                      AutoBuyClient.j9.setText(te[1]);
                      AutoBuyClient.j10.setText(te[2]);
                      AutoBuyClient.j11.setText(te[3]);
                      AutoBuyClient.j12.setText(te[4]);
                      AutoBuyClient.j13.setText(te[5]);
                      AutoBuyClient.j14.setText(te[6]);
 
                      AutoBuyClient.j15.setText(te[7]);
                      AutoBuyClient.j16.setText(te[8]);
                      AutoBuyClient.j17.setText(te[10]);
                      AutoBuyClient.j30.setText(te[11]);
                      AutoBuyClient.j31.setText(te[12]);
                      AutoBuyClient.j32.setText(te[13]);
                      AutoBuyClient.j33.setText(te[14]);
                      AutoBuyClient.j34.setText(te[15]);
                      AutoBuyClient.j35.setText(te[16]);
                      AutoBuyClient.j36.setText(te[17]);
                      AutoBuyClient.j37.setText(te[18]);
                      AutoBuyClient.j38.setText(te[19]);
                      AutoBuyClient.j39.setText(te[20]);
                      AutoBuyClient.j40.setText(te[21]);
                      AutoBuyClient.j41.setText(te[22]);
                      AutoBuyClient.jmin.setText(te[28]);

                     // AutoBuyClient.jt1.append(te[23]);
                      // AutoBuyClient.jt1.append(te[27]);
AutoBuyClient.jim1=new JLabel(new ImageIcon(new URL("http://localhost/Auto/images/"+"2.jpg")));
         
         AutoBuyClient.jim1.setIcon(new ImageIcon(new URL("http://autobuyplus.com/admin/image_files/"+te[23])))  ;
        AutoBuyClient.jim2.setIcon(new ImageIcon(new URL("http://autobuyplus.com/admin/image_files/"+te[24])))  ;
       AutoBuyClient.jim3.setIcon(new ImageIcon(new URL("http://autobuyplus.com/admin/image_files/"+te[25])))  ;
        AutoBuyClient.jim4.setIcon(new ImageIcon(new URL("http://autobuyplus.com/admin/image_files/"+te[26])))  ;
         AutoBuyClient.jim5.setIcon(new ImageIcon(new URL("http://autobuyplus.com/admin/image_files/"+te[27])))  ;
         AutoBuyClient.jt1.append("");  
    


/*

ImageIcon imgi=new ImageIcon(new URL("http://localhost/Auto/admin/image_file/"+te[23]));
                       Image img=imgi.getImage().getScaledInstance(115,115,Image.SCALE_DEFAULT);
                       AutoBuyClient.jim1.setIcon((Icon)new ImageIcon(img));

                       ImageIcon imgi2=new ImageIcon(new URL("http://autobuyplus.com/admin/image_file/"+te[24]));
                       Image img2=imgi2.getImage().getScaledInstance(115,115,Image.SCALE_DEFAULT);
                       AutoBuyClient.jim2.setIcon((Icon)new ImageIcon(img2));

                       ImageIcon imgi3=new ImageIcon(new URL("http://autobuyplus.com/admin/image_file/"+te[25]));
                       Image img3=imgi3.getImage().getScaledInstance(115,115,Image.SCALE_DEFAULT);
                       AutoBuyClient.jim3.setIcon((Icon)new ImageIcon(img3));

                       ImageIcon imgi4=new ImageIcon(new URL("http://autobuyplus.com/admin/image_file/"+te[26]));
                       Image img4=imgi4.getImage().getScaledInstance(115,115,Image.SCALE_DEFAULT);
                       AutoBuyClient.jim4.setIcon((Icon)new ImageIcon(img4));

                       ImageIcon imgi5=new ImageIcon(new URL("http://autobuyplus.com/admin/image_file/"+te[27]));
                       Image img5=imgi5.getImage().getScaledInstance(115,115,Image.SCALE_DEFAULT);
                       AutoBuyClient.jim5.setIcon((Icon)new ImageIcon(img5));

*/







//                      AutoBuyClient.icon1 = new ImageIcon(new URL("D:/NewApplcn/build/classes/"
//+"images/"+"2.jpg"));
//
//     AutoBuyClient.icon2 = new ImageIcon(new URL("D:/NewApplcn/build/classes/"+"images/"+"5.jpg"));
//     AutoBuyClient.icon3 = new ImageIcon(new URL("D:/NewApplcn/build/classes/"+"images/"+"1.jpg"));
//     AutoBuyClient.icon4 = new ImageIcon(new URL("D:/NewApplcn/build/classes/"+"images/"+"3.jpg"));
//     AutoBuyClient.icon5 = new ImageIcon(new URL("D:/NewApplcn/build/classes/"+"images/"+"4.jpg"));

 System.out.print("@@@");
                      //client.jb.setEnabled(false);
		      AutoBuyClient.jt1.append("\n");
		      AutoBuyClient.jt1.append("counting closed");
		      AutoBuyClient.jt1.setText("");
		      AutoBuyClient.jt.setText(te[9]);
		      AutoBuyClient.jt1.append("Min Bid:"+te[9]);
AutoBuyClient.jt1.setCaretPosition(AutoBuyClient.jt1.getText().length());

                      int temp;
                      if(te[9].equals("null"))
                          {
                           temp=100;
                           AutoBuyClient.jt1.setText("100");
                          }
                      else
                           temp=Integer.parseInt(te[9]);
                      temp=temp+25;
                      AutoBuyClient.jb1.setText(String.valueOf(temp));
                      temp=temp+25;
                      AutoBuyClient.jb2.setText(String.valueOf(temp));
                      temp=temp+50;
                      AutoBuyClient.jb3.setText(String.valueOf(temp));
                       if(AutoBuyClient.jb3.getText()!="ok")
         {
             AutoBuyClient.jb.setEnabled(true);
             AutoBuyClient.jb1.setEnabled(true);
             AutoBuyClient.jb2.setEnabled(true);
             AutoBuyClient.jb3.setEnabled(true);
             AutoBuyClient.jt.setEnabled(true);

         }
                      msg=null;
		      break;
		  }
		msg=null;
		}

	  }
	}
	catch(Exception e)
        {
            System.out.println(e);
            AutoBuyClient.jt1.setText("");
AutoBuyClient.jb.setEnabled(false);
                     AutoBuyClient.jb1.setEnabled(false);
                    AutoBuyClient.jb1.setEnabled(false);
                    AutoBuyClient.jb2.setEnabled(false);
                    AutoBuyClient.jb3.setEnabled(false);
            AutoBuyClient.jt1.append("Auctions closed.."+"\n"+"Thankyou");
AutoBuyClient.jt1.setCaretPosition(AutoBuyClient.jt1.getText().length());
        AutoBuyClient.j9.setText("");
                      AutoBuyClient.j10.setText("");
                      AutoBuyClient.j11.setText("");
                      AutoBuyClient.j12.setText("");
                      AutoBuyClient.j13.setText("");
                      AutoBuyClient.j14.setText("");
                      AutoBuyClient.j15.setText("");
                      AutoBuyClient.j16.setText("");
                      AutoBuyClient.j17.setText("");
                      AutoBuyClient.j30.setText("");
                      AutoBuyClient.j31.setText("");
                      AutoBuyClient.j32.setText("");
                      AutoBuyClient.j33.setText("");
                      AutoBuyClient.j34.setText("");
                      AutoBuyClient.j35.setText("");
                      AutoBuyClient.j36.setText("");
                      AutoBuyClient.j37.setText("");
                      AutoBuyClient.j38.setText("");
                      AutoBuyClient.j39.setText("");
                      AutoBuyClient.j40.setText("");
                      AutoBuyClient.j41.setText("");



        
        }
    }
}


class Thread3 implements Runnable
{
  public void run()
    {int a,b;
     try
	{
	//client.jt1.append("sending ok");
        //client.jt3.setText("arifamk");
         a=Integer.parseInt(AutoBuyClient.jt.getText());
         b=Integer.parseInt(AutoBuyClient.jb1.getText());
         System.out.println("?????");
         System.out.print(a+b);
         System.out.print("&&&&&&&&&&&");
         if(AutoBuyClient.flag==0)
         {
         if((b)<=a)
	AutoBuyClient.out.println(AutoBuyClient.jt.getText()+":"+AutoBuyClient.jt3.getText()+":"+AutoBuyClient.j17.getText()+":"+AutoBuyClient.jtcity.getText());
	//System.out.print(AutoBuyClient.jt.getText()+":"+AutoBuyClient.jt3.getText()+":"+AutoBuyClient.j17.getText()+":"+AutoBuyClient.jtcity.getText());
         }
         }
	catch(Exception e)
        {	AutoBuyClient.jt1.append("Invalid entry");}
	}
}







