<?php

    
    include 'php/uploadClass.php';


    class Catalog {

       

    private $db;

    public function __construct() {

        try{

    $this -> db = new mysqli('localhost', 'root', '', 'pcm');

    if(mysqli_connect_errno()) {
                throw new Exception('Unable to establish database connection');   
            }            

        } catch(Exception $e) {
            die($e -> getMessage());
        }

    }

     
  
  /*
    
    private $db;

    public function __construct() {

        try{

    $this -> db = new mysqli('mysql-01.inside.net', 'pcmoceania_srch', 'm7HamKhYmtQjGUhD', 'pcmoceania_srch');

    if(mysqli_connect_errno()) {
                throw new Exception('Unable to establish database connection');   
            }            

        } catch(Exception $e) {
            die($e -> getMessage());
        }

    }

     */
        
    

    public function getFirstColumnInfo() {

    //run a query to return names starting with whatever the user has typed into the text field

    // % is the wildcard character that will match any character any number of times. a.k.a begins with.
   

        $qry = "SELECT firstColumnCategory, firstColumnCodeID FROM firstcolumn";

        //$qry = "SELECT documentID, documentTitle, documentAuthor, documentDescription, documentIdName FROM document WHERE documentTitle, documentAuthor, documentDescription LIKE '%$search%'";

        $rs = $this -> db -> query($qry);

        if($rs) {

            if($rs -> num_rows > 0) {

                $documents = array();

                while($row = $rs -> fetch_assoc()) {
                    $documents[] = $row;
                }

                return $documents;

            } else {
                
            }
        } else {            

            echo 'Error Executing getAllDocuments Query';
        }
        return false;  


    }

    public function getSecondColumnInfoFromFirstColumnID($firstcolumn) {

    //run a query to return names starting with whatever the user has typed into the text field

    // % is the wildcard character that will match any character any number of times. a.k.a begins with.
   

        $qry = "SELECT secondColumnCategory, secondColumnCodeID, parentCategoryID, secondColumnActive FROM secondcolumn WHERE parentCategoryID = '$firstcolumn'";

        //$qry = "SELECT documentID, documentTitle, documentAuthor, documentDescription, documentIdName FROM document WHERE documentTitle, documentAuthor, documentDescription LIKE '%$search%'";

        $rs = $this -> db -> query($qry);

        if($rs) {

            if($rs -> num_rows > 0) {

                $documents = array();

                while($row = $rs -> fetch_assoc()) {
                    $documents[] = $row;
                }

                return $documents;

            } else {
                
            }
        } else {            

            echo 'Error Executing getAllDocuments Query';
        }
        return false;  

    }

    public function getSecondColumnInfo() {

    //run a query to return names starting with whatever the user has typed into the text field

    // % is the wildcard character that will match any character any number of times. a.k.a begins with.
   

        $qry = "SELECT secondColumnCategory, secondColumnCodeID, parentCategoryID, secondColumnActive FROM secondcolumn";

        //$qry = "SELECT documentID, documentTitle, documentAuthor, documentDescription, documentIdName FROM document WHERE documentTitle, documentAuthor, documentDescription LIKE '%$search%'";

        $rs = $this -> db -> query($qry);

        if($rs) {

            if($rs -> num_rows > 0) {

                $documents = array();

                while($row = $rs -> fetch_assoc()) {
                    $documents[] = $row;
                }

                return $documents;

            } else {
                
            }
        } else {            

            echo 'Error Executing getAllDocuments Query';
        }
        return false;  


    }

    public function getDocumentInfoFromsecondColumnID($secondcolumn) {

    //run a query to return names starting with whatever the user has typed into the text field

    // % is the wildcard character that will match any character any number of times. a.k.a begins with.
   

        $qry = "SELECT documentTitle, documentType, documentIdName FROM document WHERE parentCategoryID = '$secondcolumn' AND documentActive = true";

        //$qry = "SELECT documentID, documentTitle, documentAuthor, documentDescription, documentIdName FROM document WHERE documentTitle, documentAuthor, documentDescription LIKE '%$search%'";

        $rs = $this -> db -> query($qry);

        if($rs) {

            if($rs -> num_rows > 0) {

                $documents = array();

                while($row = $rs -> fetch_assoc()) {
                    $documents[] = $row;
                }

                return $documents;

            } else {
                
            }
        } else {            

            echo 'Error Executing getAllDocuments Query';
        }
        return false;  


    }

    public function getAllDocuments() {

    //run a query to return names starting with whatever the user has typed into the text field

    // % is the wildcard character that will match any character any number of times. a.k.a begins with.
   

        $qry = "SELECT documentID, documentTitle, documentAuthor, documentDescription, documentType, documentPath, documentIdName, documentType FROM document";

        //$qry = "SELECT documentID, documentTitle, documentAuthor, documentDescription, documentIdName FROM document WHERE documentTitle, documentAuthor, documentDescription LIKE '%$search%'";

        $rs = $this -> db -> query($qry);

        if($rs) {

            if($rs -> num_rows > 0) {

                $documents = array();

                while($row = $rs -> fetch_assoc()) {
                    $documents[] = $row;
                }

                return $documents;

            } else {
                
            }
        } else {            

            echo 'Error Executing getAllDocuments Query';
        }
        return false;  
    }


    public function getAuthorNamesByID($id) {
            
    $qry = "SELECT authors.authorName
    FROM authors
    LEFT JOIN documentauthors ON (documentauthors.authorID = authors.authorID)
    LEFT JOIN document ON (document.documentID = documentauthors.documentID)
    WHERE document.documentID = $id";

    $rs = $this -> db -> query($qry);
    
    if($rs) {
        
        if($rs -> num_rows > 0) {
            
            while($authorNames[] = $rs -> fetch_assoc());

            return $authorNames;
            
        } else {
            return false;  
        }            
    } else {
        echo 'Error executing getAuthorNamesByID query';   
    }
    
    return false;        
    }

    

    public function getDocumentsByTitle($title) {

    //run a query to return names starting with whatever the user has typed into the text field

    // % is the wildcard character that will match any character any number of times. a.k.a begins with.
   

        $qry = "SELECT documentID, documentTitle, documentAuthor, documentDescription, documentIdName, documentType, documentPath, parentCategoryID FROM document WHERE documentTitle LIKE '%$title%' AND documentActive = 1";

        $rs = $this -> db -> query($qry);

        if($rs) {

            if($rs -> num_rows > 0) {

                $documents = array();

                while($row = $rs -> fetch_assoc()) {
                    $documents[] = $row;
                }

                return $documents;

            } else {
                
            }
        } else {            

            echo 'Error Executing getDocumentsByTitle Query';
        }
        return false;  


    }

        public function getDocumentsByAuthor($author) {

    //run a query to return names starting with whatever the user has typed into the text field

    // % is the wildcard character that will match any character any number of times. a.k.a begins with.
   

        $qry = "SELECT documentID, documentTitle, documentAuthor, documentDescription, documentIdName, documentType, documentPath, parentCategoryID FROM document WHERE documentAuthor LIKE '%$author%' AND documentActive = true";

        $rs = $this -> db -> query($qry);

        if($rs) {

            if($rs -> num_rows > 0) {

                $documents = array();

                while($row = $rs -> fetch_assoc()) {
                    $documents[] = $row;
                }

                return $documents;

            } else {
                
            }
        } else {            

            echo 'Error Executing getDocumentsByAuthor Query';
        }
        return false;  


    }

        public function getDocumentsByContent($content) {

    //run a query to return names starting with whatever the user has typed into the text field

    // % is the wildcard character that will match any character any number of times. a.k.a begins with.
   

        $qry = "SELECT documentID, documentTitle, documentAuthor, documentDescription, documentIdName, documentType, documentPath, parentCategoryID FROM document WHERE documentContent LIKE '%$content%' AND documentActive = true";

        $rs = $this -> db -> query($qry);

        if($rs) {

            if($rs -> num_rows > 0) {

                $documents = array();

                while($row = $rs -> fetch_assoc()) {
                    $documents[] = $row;
                }

                return $documents;

            } else {
                
            }
        } else {            

            echo 'Error Executing getDocumentsByContent Query';
        }
        return false;  


    }

    public function getFirstColumnIDFromSecondColumnID($secondcolumnID) {

        $qry = "SELECT parentCategoryID FROM secondcolumn WHERE secondColumnCodeID = '$secondcolumnID'";

        $rs = $this -> db -> query($qry);

        if($rs) {

            if($rs -> num_rows > 0) {

                $firstColumn = $rs -> fetch_assoc();
                return $firstColumn;


            } else {
                
            }
        } else {            

            echo 'Error Executing getFirstColumnIDFromSecondColumnID Query';
        }
        return false;  


    }

    
    public function addNewUser() {

        $this -> sanitizeInput();
        extract($_POST);
        
        $qry = "INSERT INTO users VALUES(NULL, '$firstName', '$lastName', '$email', '$phone', '$companyName', '$companyWebsite', '$companyEmail')";

        $rs = $this -> db -> query($qry);
        
        if($rs && $this -> db -> affected_rows > 0) {
            $result['newUserID'] = $this -> db -> insert_id;
        } else {
            $result['newUserID'] = false;
            //echo 'Error Executing addNewUser Query';
        }
        return $result;      
    }

    public function uploadAndResizeImage($documentType) {
        
        /*
        Setting the filepaths for where the images are going to be stored.


        */

        if($documentType == 'Video') {
            $filePath = 'uploads/video';
            $upload = new Upload('documentFile', $filePath);
        }

        if($documentType == 'Written') {
            $filePath = 'uploads/written';
            $upload = new Upload('documentFile', $filePath);
        }

        if($documentType == 'Audio') {
            $filePath = 'uploads/audio';
            $upload = new Upload('documentFile', $filePath);
        }

        if($documentType == 'Logo') {
            $filePath = 'uploads/company-logos';
            $upload = new Upload('logoFile', $filePath);
        }

        /*
        /*
        Passing through the necessary information to the Upload class.
        */
        
        
        /*
        This variable is only returned if the upload process
        worked correctly
        */
        $returnFile = $upload -> isUploaded();
        
        /*
        If the variable isn't active then something went wrong and
        the error message is returned to the user.
        */
        if(!$returnFile) {
            $result['uploadMsg'] = $upload -> msg;
            $result['ok'] = false;
            return $result;
        }
        
        //if we are this point, the image should have uploaded
        //should be on our server. 'images/products'
        //resize it

        $fileName = basename($returnFile);

        $path = $filePath . '/' . $fileName;

        return $path;
                
    }


     public function countSubcategoryItems($subcategory) {

        $qry = "SELECT count(documentID) FROM document WHERE parentCategoryID = '$subcategory'";

        $rs = $this -> db -> query($qry);

        if($rs) {

            if($rs -> num_rows > 0) {

                while($row = $rs -> fetch_assoc()) {
                    $count = $row;
                }

                return $count;
            } else {
                echo 'No projects were able to be counted';
            }
        } else {
            echo 'Error Executing countProjects Query';
        }
        return false;
    }   

    public function checkLastPCMLogoID($documentID) {

        $qry = "SELECT logoID FROM document WHERE documentID = '$documentID'";

        $rs = $this -> db -> query($qry);

        if($rs) {

            if($rs -> num_rows > 0) {

                $logoID = $rs -> fetch_assoc();
                return $logoID;

            } else {

                $logoID = false;
                return $logoID;
                
            }
        } else {            

            echo 'Error Executing getFirstColumnIDFromSecondColumnID Query';
        }
        return false;  

    }   

    public function updatePCMLogoValue($logoID, $documentID) {

        $qry = "UPDATE document SET logoID = $logoID WHERE documentID = '$documentID'";

        $rs = $this -> db -> query($qry);
        
        if($rs) {
            
            if($this -> db -> affected_rows > 0) {
                return true;
            } else {
                return false;
            }
            
        } else {
            echo 'Error Executing updatePasswordById Query';
        }     
               
    }


    public function insertNewDocument($userID, $subcategory, $documentPath, $logoPath, $documentIDName) {

        $this -> sanitizeInput();
        extract($_POST);
   

        $qry = "INSERT INTO document VALUES(NULL, '$documentTitle', '$documentSubtitle', '$userID', '$authorsNameOne', '$authorCredentials', '$documentKeywords', '$documentExcerpt', '$documentExcerpt', '$documentFormat', '$documentPath', '$logoPath', '$subcategory', '$documentIDName', '$datePublished', CURRENT_DATE, '0', '0')";

        $rs = $this -> db -> query($qry);
        
        if($rs && $this -> db -> affected_rows > 0) {
            $result['newDocumentID'] = $this -> db -> insert_id;
            return $result;
        } else {
            $result['newDocumentID'] = false;
            return $result;
        }

    }

    public function checkIfAuthorExists($authorName) {
   
        $qry = "SELECT authorID FROM authors WHERE authorName = '$authorName'";

        $rs = $this -> db -> query($qry);

        if($rs -> num_rows > 0) {
                $authorID = $rs -> fetch_assoc();
                return $authorID;

            } else {
                return false;
                echo 'Error Executing getFirstColumnIDFromSecondColumnID Query';                
            }
       
    }

    public function insertNewAuthor($authorName) {

        if(!get_magic_quotes_gpc()) {
            $authorName = $this -> db -> real_escape_string($authorName);
        }

        $qry = "INSERT INTO authors VALUES(NULL, '$authorName')";

        $rs = $this -> db -> query($qry);
        
        if($rs && $this -> db -> affected_rows > 0) {
            $result['newAuthorID'] = $this -> db -> insert_id;
            return $result;
        } else {
            $result['newAuthorID'] = false;
            return $result;
        }
    }

    public function linkAuthorToDocument($documentID, $authorID) {

        $qry = "INSERT INTO documentauthors VALUES(NULL, $documentID, $authorID)";

        $rs = $this -> db -> query($qry);
        
        if($rs && $this -> db -> affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }


    public function getLastDocumentID() {
   
        $qry = "SELECT MAX(documentID) FROM document";

        $rs = $this -> db -> query($qry);

        if($rs -> num_rows > 0) {
                $documentID = $rs -> fetch_assoc();
                return $documentID;

            } else {
                return false;
                echo 'Error Executing getNextPCMLogo Query';                
            }  
    }

    public function getLastPCMLogo($documentID) {
   
        $qry = "SELECT logoID FROM document WHERE documentID = $documentID";

        $rs = $this -> db -> query($qry);

        if($rs -> num_rows > 0) {
                $logoID = $rs -> fetch_assoc();
                return $logoID;

            } else {
                return false;
                echo 'Error Executing getNextPCMLogo Query';                
            }
       
    }

    public function getNewPCMLogo($pcmLogoID) {
   
        $qry = "SELECT logoName FROM pcmlogos WHERE logoID = $pcmLogoID";

        $rs = $this -> db -> query($qry);

        if($rs -> num_rows > 0) {
                $logoName = $rs -> fetch_assoc();
                return $logoName;

            } else {
                return false;
                echo 'Error Executing getNextPCMLogo Query';                
            }
       
    }

    public function getDocumentPath($documentID) {
   
        $qry = "SELECT documentPath FROM document WHERE documentID = $documentID";

        $rs = $this -> db -> query($qry);

        if($rs -> num_rows > 0) {
                $documentPath = $rs -> fetch_assoc();
                return $documentPath;

            } else {
                return false;
                echo 'Error Executing getNextPCMLogo Query';                
            }
       
    }

    public function getLogoPath($documentID) {
   
        $qry = "SELECT logoPath FROM document WHERE documentID = $documentID";

        $rs = $this -> db -> query($qry);

        if($rs -> num_rows > 0) {
                $documentPath = $rs -> fetch_assoc();
                return $documentPath;

            } else {
                return false;
                echo 'Error Executing getNextPCMLogo Query';                
            }
       
    }

    public function getCategoryNames($secondColumnCodeID) {
            
    $qry = "SELECT secondcolumn.secondColumnCategory, firstcolumn.firstColumnCategory
    FROM secondcolumn
    LEFT JOIN firstcolumn ON (firstcolumn.firstColumnCodeID = secondcolumn.parentCategoryID)
    WHERE secondcolumn.secondColumnCodeID = '$secondColumnCodeID'";

    //echo $qry;

    $rs = $this -> db -> query($qry);
    
    if($rs) {
        
        if($rs -> num_rows > 0) {
            
            while($columnNames[] = $rs -> fetch_assoc());

            return $columnNames;
            
        } else {
            return false;  
        }            
    } else {
        echo 'Error executing getCategoryNames query';   
    }
    
    return false;        
    }
    
    private function sanitizeInput() {
        
        foreach($_POST as &$post) {
            $post = $this -> db -> real_escape_string($post);
        }
        
    }




}

?>