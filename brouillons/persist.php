
        $property = new Property();
        $property->setTitle('Ma suite 1')
                 ->setDescription('Description de la chambre')
                 ->setSurface(600)
                 ->setRooms(4)
                 ->setBedrooms(2)
                 ->setFloor(2)
                 ->setCity('Ville')
                 ->setAddress('Adresse')
                 ->setPostalCode('69000')
                 ->setParking(2)
                 ->setStatus(0)
                 ->setType(0)
                 ->setPrice(2000);
                
            
        $em->persist($property);

        $property1 = new Property();
        $property1->setTitle('Ma suite 2')
                 ->setDescription('Description de la chambre')
                 ->setSurface(600)
                 ->setRooms(9)
                 ->setBedrooms(6)
                 ->setFloor(2)
                 ->setCity('Ville')
                 ->setAddress ('Adresse')
                 ->setPostalCode('69000')
                 ->setParking(4)
                 ->setStatus(0)
                 ->setType(1)
                 ->setPrice(2500);
                
        $em = $this->getDoctrine()->getManager();
        $em->persist($property1);

        $property2 = new Property();
        $property2->setTitle('Ma suite 3')
                 ->setDescription('Description de la chambre')
                 ->setSurface(600)
                 ->setRooms(9)
                 ->setBedrooms(6)
                 ->setFloor(2)
                 ->setCity('Ville')
                 ->setAddress('Adresse')
                 ->setPostalCode('69000')
                 ->setParking(4)
                 ->setStatus(0)
                 ->setType(2)
                 ->setPrice(5000);
    
        $em = $this->getDoctrine()->getManager();
        $em->persist($property2);
        $em->flunch();