import java.io.File;
import java.io.FileInputStream;
import java.io.IOException;
import java.util.Iterator;

import com.hp.hpl.jena.rdf.model.Model;
import com.hp.hpl.jena.rdf.model.ModelFactory;
import com.hp.hpl.jena.rdf.model.Property;
import com.hp.hpl.jena.rdf.model.Resource;
import com.hp.hpl.jena.rdf.model.Selector;
import com.hp.hpl.jena.rdf.model.SimpleSelector;
import com.hp.hpl.jena.rdf.model.Statement;


public class ReadingRDF_1 {
	public static void main(String [] args) throws IOException{
		
		String ns="http://www.semantics.com/";
        Model model = ModelFactory.createDefaultModel();
        Property hasPrice = model.createProperty(ns,"hasPrice");
        Property hasModel = model.createProperty(ns,"hasModel");
        String ques = ns+"Tata";
        Resource query = model.createResource(ques);
        Resource query1 = model.createResource(ns+"car");
        // Resource ques = model.createResource(ns+"John");
        FileInputStream fin = new FileInputStream(new File("Chennai.rdf"));
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
        	arr[i]=stmt.getResource().getLocalName();
        	
        
		int j=0;
		//for(j=0;j<arr.length;j++)
		{
        query = model.createResource(ns+arr[i]);
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
        	}
        	
        }
		}
		i++;
		System.out.println(" \n\n");
        }
        
	}
	
}