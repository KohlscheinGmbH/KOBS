<?php

namespace App\Repository;

use App\Entity\Artikel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Artikel|null find($id, $lockMode = null, $lockVersion = null)
 * @method Artikel|null findOneBy(array $criteria, array $orderBy = null)
 * @method Artikel[]    findAll()
 * @method Artikel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArtikelRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Artikel::class);
    }
	
	public function findById(int $id)
    {
	    $conn = $this->getEntityManager()->getConnection();
        $sql = 'SELECT * FROM artikel ';
		if ($id>0) {
			$sql .= 'Where id = '. $id;
		}
		
        $stmt = $conn->prepare($sql);
        $stmt->execute();

		return $stmt->fetchAll();
    }

//    /**
//     * @return Artikel[] Returns an array of Artikel objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Artikel
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
