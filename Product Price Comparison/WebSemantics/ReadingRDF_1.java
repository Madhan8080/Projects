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
		
		String ns="http://www.vit.ac.in/";
        Model model = ModelFactory.createDefaultModel();
        Property hasPrice = model.createProperty(ns,"hasPrice");
        String ques = ns+"Chevrolet";
        Resource query = model.createResource(ques);
        Resource query1 = model.createResource(ns+"car");
        // Resource ques = model.createResource(ns+"John");
        FileInputStream fin = new FileInputStream(new File("cars.rdf"));
        model.read(fin, "RDF/XML");
       Selector selector = new SimpleSelector((Resource)query1, (Property)hasfeature, (Resource)null);
        for(Iterator it = model.listStatements(selector);it.hasNext();)
        { 
        	Statement stmt = (Statement) it.next(); 
        	//System.out.println(stmt.getResource().getURI());
        	String q = stmt.getSubject().getURI().toString();
        	System.out.println(stmt.getObject().toString());
        	
        }
		String arr[] = {"Beat", "Captiva",""};
		for(int i=0;i<2;i++)
		{
        query = model.createResource(ns+arr[i]);
        selector = new SimpleSelector((Resource)query, (Property)hasfeature, (Resource)null);
        for(Iterator it = model.listStatements(selector);it.hasNext();)
        { 
        	Statement stmt = (Statement) it.next(); 
        	//System.out.println(stmt.getResource().getURI());
        	String q = stmt.getSubject().getURI().toString();
        	System.out.println(stmt.getObject().toString());
        	
        }
        }
        
	}
	
}