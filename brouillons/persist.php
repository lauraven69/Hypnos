        $property = new Property();
        $property->setTitle('Ma suite 1')
                 ->setDescription('Description de la chambre')
                 ->setSurface(100)
                 ->setRooms(4)
                 ->setBedrooms(2)
                 ->setFloor(2)
                 ->setCountry('Île-de-France')
                 ->setCity('Paris')
                 ->setAddress('57 rue des trois frères')
                 ->setPostalCode('75018')
                 ->setParking(2)
                 ->setStatus(0)
                 ->setType(0)
                 ->setPrice(2000);
        $em->persist($property);
        
        $property1 = new Property();
        $property1->setTitle('Ma suite 2')
                 ->setDescription('Description de la chambre')
                 ->setSurface(200)
                 ->setRooms(5)
                 ->setBedrooms(2)
                 ->setFloor(2)
                 ->setCountry('Rhône')
                 ->setCity('Lyon')
                 ->setAddress ('3 montée du gourguillon')
                 ->setPostalCode('69005')
                 ->setParking(3)
                 ->setStatus(0)
                 ->setType(1)
                 ->setPrice(2500);
        $em = $this->getDoctrine()->getManager();
        $em->persist($property1);
        
        $property2 = new Property();
        $property2->setTitle('Ma suite 3')
                 ->setDescription('Description de la chambre')
                 ->setSurface(300)
                 ->setRooms(9)
                 ->setBedrooms(3)
                 ->setFloor(2)
                 ->setCountry('Alpes-Maritimes')
                 ->setCity('Cannes')
                 ->setAddress('44 boulevard de la République')
                 ->setPostalCode('06150')
                 ->setParking(4)
                 ->setStatus(0)
                 ->setType(2)
                 ->setPrice(5000);
        $em = $this->getDoctrine()->getManager();
        $em->persist($property2);
        $em->flunch();