<?php
/**
 * Created by PhpStorm.
 * User: Maurizio
 * Date: 21/11/2016
 * Time: 17:37
 */
namespace AppBundle\Controller;

use DataBaseManager\DataBase;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use StatsManagement\Entity\Product;


/*Calling url:
http://localhost/yourTeam/web/app_dev.php/yourRoute
*/

class StatsManagementController extends Controller
{
    /**
     * @Route("/getall")
     * @Method("GET");
     */
    public function getAll()
    {
        $html = "<ul>";
        for ($i = 0; $i < 100; $i++) {
            $product = new Product($i, "Product_" . $i);
            $html .= "<li>";
            $html .= $product; //__toString()
            $html .= "</li>";
        }
        $html .= "</ul>";
        $response = new Response($html);
        return $response; /*Bisogna restituire un oggetto response*/
    }

    /**
     * @Route("/getallfromdb")
     * @Method("GET");
     */
    public function getAllFromDB()
    {
        $connection = DataBase::getConnection();
        $sql = "SELECT * FROM prodotto";
        $result = $connection->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            $html = "<ul>";
            while ($row = $result->fetch_assoc()) {
                $product = new Product($row["id"], $row["name"]);
                $html .= "<li>";
                $html .= $product->__toString();
                $html .= "</li>";
            }
            $html .= "</ul>";
        }

        //$response = new Response(var_dump($connection));
        $response = new Response($html);
        return $response;
    }

    /**
     * @Route("/get/{id}")
     * @Method("GET");
     */
    public
    function getById($id)
    {
        $product = new Product($id, "Product_" . $id);
        $html = "<ul>";
        $html .= "<li>";
        $html .= $product; //__toString()
        $html .= "</li>";
        $html .= "</ul>";
        $response = new Response($html);
        return $response; /*Bisogna restituire un oggetto response*/
    }

    /**
     * @Route("/insert")
     * @Method("POST");
     */
    public
    function insert(Request $request)
    {
        $id = $request->request->get("id");
        $name = $request->request->get("name");
        $product = new Product($id, $name);
        $html = "<h1>Product has been inserted successfully.</h1>";
        $html = "<p>" . $product . "</p>";
        $response = new Response($html);
        return $response;
    }

    /**
     * @Route("/update")
     * @Method("POST");
     */
    public
    function update(Request $request)
    {
        $id = $request->request->get("id");
        $newName = $request->request->get("name");
        $product = new Product($id, "oldname");//search by id from DB
        $product->setName($newName);
        $html = "<h1>Product has been updated successfully.</h1>";
        $html .= "<p>" . $product . "</p>";
        $response = new Response($html);
        return $response;
    }

    /**
     * @Route("/delete")
     * @Method("POST");
     */
    public
    function delete(Request $request)
    {
        $id = $request->request->get("id");
        $html = "<h1>Product with id: " . $id . " has been removed successfully.</h1>";
        $response = new Response($html);
        return $response;
    }
}