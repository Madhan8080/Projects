import java.io.File;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.InputStream;
import java.net.MalformedURLException;
import java.net.URL;
import java.net.URLConnection;
import java.util.Iterator;
import java.util.Scanner;

import org.apache.commons.io.IOUtils;
import org.json.simple.JSONArray;
import org.json.simple.JSONObject;
import org.json.simple.parser.JSONParser;
import org.json.simple.parser.ParseException;

import com.hp.hpl.jena.rdf.model.Model;
import com.hp.hpl.jena.rdf.model.ModelFactory;
import com.hp.hpl.jena.rdf.model.Property;
import com.hp.hpl.jena.rdf.model.Resource;
import com.hp.hpl.jena.rdf.model.Selector;
import com.hp.hpl.jena.rdf.model.SimpleSelector;
import com.hp.hpl.jena.rdf.model.Statement;

public class newSc {
	
	
	public static void main(String []args ) throws IOException
	{
		String ns="http://www.semantics.com/";
		Model model = ModelFactory.createDefaultModel();
		
		
		String path="",city="Agartala",make="Chevrolet";
		//System.out.println("Enter Qyery");
		Scanner input=new Scanner(System.in);
		//city=input.nextLine();
		//make=input.nextLine();
		
		URL url = null;
		path="http://api.dataweave.in/v1/carPricesIndia/findByMake/?api_key=b20a79e582ee4953ceccf41ac28aa08d&make=Chevrolet&city=Agartala&page=1&per_page=10";
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
        Resource user_make = model.createResource(ns+make);
        
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
					FileOutputStream fout = new FileOutputStream(new File("cars.rdf"));
					model.write(fout,"RDF/XML-ABBREV"); 
					
				//}
				
			}
			catch(Exception e)
			{
				e.printStackTrace();
			}
			

		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		
	}
}