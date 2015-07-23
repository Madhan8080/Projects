import java.awt.BorderLayout;
import java.awt.FlowLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.InputStream;
import java.lang.reflect.Array;
import java.net.MalformedURLException;
import java.net.URL;
import java.net.URLConnection;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.Iterator;
import java.util.Scanner;
import java.util.SortedSet;
import java.util.TreeSet;

import com.hp.hpl.jena.rdf.model.Model;
import com.hp.hpl.jena.rdf.model.ModelFactory;
import com.hp.hpl.jena.rdf.model.Property;
import com.hp.hpl.jena.rdf.model.ResIterator;
import com.hp.hpl.jena.rdf.model.Resource;
import com.hp.hpl.jena.rdf.model.Selector;
import com.hp.hpl.jena.rdf.model.SimpleSelector;
import com.hp.hpl.jena.rdf.model.Statement;
import com.hp.hpl.jena.rdf.model.StmtIterator;

import javax.swing.*;

import org.apache.commons.io.IOUtils;
import org.json.simple.JSONArray;
import org.json.simple.JSONObject;
import org.json.simple.parser.JSONParser;


public class Semantic {

	public Semantic() {
	}
		// TODO Auto-generated constructor stub
	static JTextArea L;
	static JButton search;
	static JTextArea chatArea;
		public static void main(String[] args)
	     {
			chatArea = new JTextArea(8, 40);
		      chatArea.setEditable(false);
		      chatArea.setFocusable(false);
		      JScrollPane chatScroll = new JScrollPane(chatArea);
		      JPanel chatPanel = new JPanel(new BorderLayout());
		      chatPanel.add(new JLabel("Output : ", SwingConstants.LEFT), BorderLayout.PAGE_START);
		      chatPanel.add(chatScroll);

		      final JTextField make = new JTextField(40);
		      
		      JPanel CityPanel = new JPanel(new FlowLayout(FlowLayout.LEFT, 0, 0));
		      
		      CityPanel.add(new JLabel("Make .. ! "));
		      
		      CityPanel.add(make,BorderLayout.SOUTH);

		      
		      final JTextField city = new JTextField(40);
		      //JPanel cityPanel = new JPanel(new BorderLayout());
		      JPanel MakePanel = new JPanel(new FlowLayout(FlowLayout.LEFT, 0, 0));
		      MakePanel.add(new JLabel("City .. ! "));
		      //cityPanel.setLayout(new BoxLayout(inputPanel, BoxLayout.LINE_AXIS));
		      MakePanel.add(city,BorderLayout.SOUTH);
		      
		      
		      JButton search = new JButton("Search ..");
		      JPanel searchPanel = new JPanel(new FlowLayout(FlowLayout.LEFT, 0, 0));
		      searchPanel.add(new JLabel("Click Here To Search .. ! "));
		      searchPanel.add(search,BorderLayout.SOUTH);

		      
		      
		      
		      JButton sendBtn = new JButton("Search");
		      //inputPanel.add(sendBtn);
		      //JPanel youLabelPanel = new JPanel(new FlowLayout(FlowLayout.LEFT, 0, 0));
		      //youLabelPanel.add(new JLabel("Your Query Here Please .. !"));

		      JPanel mainPanel = new JPanel();
		      mainPanel.setLayout(new BoxLayout(mainPanel, BoxLayout.PAGE_AXIS));
		      mainPanel.add(chatPanel);
		      mainPanel.add(Box.createVerticalStrut(10));
		      mainPanel.add(CityPanel);
		      mainPanel.add(MakePanel);
		      mainPanel.add(searchPanel);
		     // mainPanel.add(inputPanel);
		     // mainPanel.add(cityPanel);
		      JFrame frame = new JFrame("Search For : ");
		      frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		      frame.add(mainPanel);
		      frame.pack();
		      frame.setLocationRelativeTo(null);
		      frame.setVisible(true);
		      search.addActionListener(new ActionListener() {
				
				@Override
				public void actionPerformed(ActionEvent arg0) {
					// TODO Auto-generated method stub
					/*try {
					String ns="http://www.vit.ac.in/";
			        Model model = ModelFactory.createDefaultModel();
			        Property hasanswer = model.createProperty(ns,"hasAnswer");
			        String ques = ns+"What is a?";
			        
			        FileInputStream fin;
					
						fin = new FileInputStream(new File("D:/myfile.rdf"));
					
			        model.read(fin, "RDF/XML");
			        Selector selector = new SimpleSelector((Resource)null, (Property)hasanswer, (Resource)null);
			        for(Iterator it = model.listStatements(selector);it.hasNext();)
			        { 
			        	Statement stmt = (Statement) it.next(); 
			        	System.out.println(stmt.getResource().getURI());
			        	String q = stmt.getSubject().getURI().toString();
			        	if(ques.equalsIgnoreCase(q)){
			        	System.out.println(stmt.getObject().toString());
			        	}
			        }
			        
				}
					catch(Exception e)
					{
						
					}*/
					String City_Txt=city.getText().toString();
					String Make_TXT=make.getText().toString();
					//GenRDF(City_Txt,Make_TXT);
					try {
						//readData(Make_TXT, City_Txt);
						if(City_Txt.length()==0||Make_TXT.length()==0)
						{
							chatArea.setText("Please Key In the Req Data");
						}
						else{
						temp(Make_TXT,City_Txt);
						}
					} catch (Exception e) {
						// TODO Auto-generated catch block
						e.printStackTrace();
					}
				}
			});
	  }

		public static void GenRDF(String City,String Make)
		{
			String ns="http://www.semantics.com/";
			Model model = ModelFactory.createDefaultModel();
			
			
			String path="";
			//city="Agartala",make="Chevrolet";
			//System.out.println("Enter Qyery");
			Scanner input=new Scanner(System.in);
			//city=input.nextLine();
			//make=input.nextLine();
			
			URL url = null;
			path="http://api.dataweave.in/v1/carPricesIndia/findByMake/?api_key=b20a79e582ee4953ceccf41ac28aa08d&make="+Make+"&city="+City+"&page=1&per_page=10";
			//path=path+make+"&"+city+"&page=1&per_page=10";
			
			try {
				url = new URL(path);
			} catch (MalformedURLException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
			URLConnection con = null;
			try {
				con = url.openConnection();
			} catch (IOException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
			InputStream in = null;
			try {
				in = con.getInputStream();
			} catch (IOException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
			String encoding = con.getContentEncoding();
			encoding = encoding == null ? "UTF-8" : encoding;
			String body = "";String text="";
			
			Resource car = model.createResource(ns+"car");
	        Resource user_make = model.createResource(ns+Make);
	        
	        Property hasMake = model.createProperty(ns+"hasMake");
	        Property hasModel = model.createProperty(ns+"hasModel");
	        Property hasPrice = model.createProperty(ns+"hasPrice");
	        Property hasCity = model.createProperty(ns+"hasCity");
	        
	        car.addProperty(hasMake,user_make);
	        
			
			
			try {
				body = IOUtils.toString(in, encoding);
				//System.out.println(body);
				JSONParser parser = new JSONParser();
				 
				try {
			 
					Object obj = parser.parse(body);
			 
					JSONObject jsonObject = (JSONObject) obj;
			 
					// loop array
					JSONArray data = (JSONArray) jsonObject.get("data");
					System.out.println(data.size());
					String modell="",price="",ccity="";

						Iterator p = data.iterator();
						while (p.hasNext()) 
						{
							JSONObject innerObj = (JSONObject) p.next();
							modell=(String) innerObj.get("model");
							price=(String) innerObj.get("price");
							ccity=(String) innerObj.get("city");
							
							Resource model1 = model.createResource(ns+modell);
							Resource price1 = model.createResource(ns+price);
							Resource city1 = model.createResource(ns+ccity);
							
							user_make.addProperty(hasModel, model1);
							model1.addProperty(hasPrice, price1);
							model1.addProperty(hasCity, city1);
							
							
							System.out.println("\n\n***\n"+modell+"\n"+price+"\n"+ccity);
						}
						FileOutputStream fout = new FileOutputStream(new File(Make+".rdf"));
						model.write(fout,"RDF/XML-ABBREV"); 
						readData(Make, City);
					//}
					
				}
				catch(Exception e)
				{
					System.out.println(e.toString());
				}
				

			} catch (Exception e) {
				// TODO Auto-generated catch block
				System.out.println(e.toString());
			}

		}
		public static void readData(String make,String City) throws Exception
		{
			
			String ns="http://www.semantics.com/";
	        Model model = ModelFactory.createDefaultModel();
	        Property hasModel = model.createProperty(ns,"hasModel");
	        String ques = ns+make;
	        // Resource ques = model.createResource(ns+"John");
	        String str="Models ... !!\n";
	        FileInputStream fin = new FileInputStream(new File(make+".rdf"));
	        model.read(fin, "RDF/XML");
	        Selector selector = new SimpleSelector((Resource)null, (Property)hasModel, (Resource)null);
	        for(Iterator it = model.listStatements(selector);it.hasNext();)
	        { 
	        	Statement stmt = (Statement) it.next();
	        	String inner=stmt.getResource().getLocalName();
	        	System.out.println(inner);
	        	str+=inner+"\n";
	        	InnerLoop(inner);
	        }
	        chatArea.setText(str);
			
		}
		public static void InnerLoop(String inner) throws FileNotFoundException
		{
			String ns="http://www.semantics.com/";
			Model model_inner = ModelFactory.createDefaultModel();
	    	Property hasPrice = model_inner.createProperty(ns,"hasPrice");
	    	 String ques_inner = ns+inner;
	    	 System.out.println("INNER"+hasPrice);
	    	 FileInputStream fin_inner = new FileInputStream(new File("cars.rdf"));
	         model_inner.read(fin_inner, "RDF/XML");
	    	 Selector selector_inner = new SimpleSelector((Resource)null, (Property)hasPrice, (Resource)null);
	    	 
	    	 for(Iterator it_inner = model_inner.listStatements(selector_inner);it_inner.hasNext();)
	         {
	    		 Statement stmt_inner = (Statement) it_inner.next();
	         	String inner_inner=stmt_inner.getResource().getLocalName();
	         	System.out.println(inner_inner);
	         }
		}
		public static void temp(String name,String City)
		{
			try{
				String Print="";
			
				String ns="http://www.semantics.com/";
		        Model model = ModelFactory.createDefaultModel();
		        Property hasPrice = model.createProperty(ns,"hasPrice");
		        Property hasModel = model.createProperty(ns,"hasModel");
		        String ques = ns+name;
		        Resource query = model.createResource(ques);
		        Resource query1 = model.createResource(ns+"car");
		        // Resource ques = model.createResource(ns+"John");
		        FileInputStream fin = new FileInputStream(new File(City+".rdf"));
		        model.read(fin, "RDF/XML-ABBREV");
		        String arr[]=new String[20];
		        int i=0;
		       Selector selector = new SimpleSelector((Resource)query, (Property)hasModel, (Resource)null);
		        for(Iterator it = model.listStatements(selector);it.hasNext();)
		        { 
		        	Statement stmt = (Statement) it.next(); 
		        	//System.out.println(stmt.getResource().getURI());
		        	String q = stmt.getSubject().getURI().toString();
		        	System.out.println("1 "+stmt.getResource().getLocalName());
		        	Print+=stmt.getResource().getLocalName()+"\n";
		        	arr[i]=stmt.getResource().getLocalName();
		        	
		        
				int j=0;
				 
				//for(j=0;j<arr.length;j++)
				{
		        query = model.createResource(ns+arr[i]);
		        
		        SortedSet set = new TreeSet(); 
		        Print+="The Various Rate Options Are.. !\n\n";
		        //System.out.println(query+"Query");
		        selector = new SimpleSelector((Resource)query, (Property)hasPrice, (Resource)null);
		        for(Iterator it_1 = model.listStatements(selector);it_1.hasNext();)
		        { 
		        	Statement stmt_1 = (Statement) it_1.next(); 
		        	//System.out.println(stmt.getResource().getURI());
		        	String q_1 = stmt_1.getSubject().getLocalName().toString();
		        	//System.out.println("Q1"+q_1);
		        	if(q_1.equals(arr[i]))
		        	{
		        	System.out.println(stmt_1.getResource().toString());
		        	//Print+=stmt_1.getResource().toString()+"\n";
		        	int len=ns.length();
		        	String trun=stmt_1.getResource().toString();
		        	trun=trun.substring(len);
		        	Print+=trun+"\n";
		        	int temp=Integer.parseInt(trun);
		        	set.add(temp);
		        	
		        	
		        	}
		        	
		        }
		        System.out.println("Low "+set.first());
		        
		       
		        System.out.println(" Minimum Value Of "+arr[i]+ " is"+set.first());
		        Print+="\n\n"+" Minimum Value Of "+arr[i]+ " is "+set.first()+"\n\n";
		        int t=0;
		        /*for(int k=0;k<price.length;k++)
		        {
		        	for(int m=k+1;m<price.length;m++)
		        	{
		        		if(price[k]>price[m])
		        		{
		        			t=price[k];
		        			price[k]=price[m];
		        			price[m]=t;
		        		}
		        	}
		        }*/
		        
				}
				
				i++;
				System.out.println(" \n\n");
		        }
		        chatArea.setText(Print);
			}
			catch(Exception e)
			{
				System.out.println(e.toString());
			}
		}
		
		
	

}
