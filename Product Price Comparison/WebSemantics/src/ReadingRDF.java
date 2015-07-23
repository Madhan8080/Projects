import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.util.Iterator;

import com.hp.hpl.jena.rdf.model.Model;
import com.hp.hpl.jena.rdf.model.ModelFactory;
import com.hp.hpl.jena.rdf.model.Property;
import com.hp.hpl.jena.rdf.model.Resource;
import com.hp.hpl.jena.rdf.model.Selector;
import com.hp.hpl.jena.rdf.model.SimpleSelector;
import com.hp.hpl.jena.rdf.model.Statement;


public class ReadingRDF {
	public static void main(String [] args) throws IOException{
		
		String ns="http://www.semantics.com/";
        Model model = ModelFactory.createDefaultModel();
        Property hasModel = model.createProperty(ns,"hasModel");
        String ques = ns+"Chevrolet";
        // Resource ques = model.createResource(ns+"John");
        FileInputStream fin = new FileInputStream(new File("cars.rdf"));
        model.read(fin, "RDF/XML-ABBREV");
        Selector selector = new SimpleSelector((Resource)null, (Property)hasModel, (Resource)null);
        for(Iterator it = model.listStatements(selector);it.hasNext();)
        { 
        	Statement stmt = (Statement) it.next();
        	String inner=stmt.getResource().getLocalName();
        	System.out.println(inner);
        	//InnerLoop(inner);
        }
        
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
	
}