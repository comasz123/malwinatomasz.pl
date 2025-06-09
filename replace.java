import java.io.*;
import java.nio.file.*;
import java.util.*;

public class replace {

    // Directory containing HTML files
    public static void main(String[] args) {
        String directoryPath = ".";  // Set your directory path

        try {
            // Get a list of all files in the directory
            List<File> htmlFiles = getHTMLFiles(directoryPath);
            
            // Process each file
            for (File htmlFile : htmlFiles) {
                replaceMetaTag(htmlFile);
            }
            System.out.println("Meta tag replacement completed.");
        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    // Method to get all HTML files in the given directory
    private static List<File> getHTMLFiles(String directoryPath) throws IOException {
        List<File> htmlFiles = new ArrayList<>();
        Files.walk(Paths.get(directoryPath))
                .filter(Files::isRegularFile)
                .forEach(filePath -> {
                    if (filePath.toString().endsWith(".html")) {
                        htmlFiles.add(filePath.toFile());
                    }
                });
        return htmlFiles;
    }

    // Method to replace the <meta name="description"> tag in an HTML file
    private static void replaceMetaTag(File htmlFile) throws IOException {
        String content = new String(Files.readAllBytes(htmlFile.toPath()));

        // Search for the <meta> tag and replace it
        String metaTagToFind = "89.77.242.172";
        String newMetaTag = "zdjecia.malwinatomasz.pl";
        
        if (content.contains(metaTagToFind)) {
            content = content.replace(metaTagToFind, newMetaTag);
            Files.write(htmlFile.toPath(), content.getBytes());
            System.out.println("Updated: " + htmlFile.getName());
        }
    }
}
