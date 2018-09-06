<?php

namespace App\Repository;

use App\Entity\Warengruppe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Warengruppe|null find($id, $lockMode = null, $lockVersion = null)
 * @method Warengruppe|null findOneBy(array $criteria, array $orderBy = null)
 * @method Warengruppe[]    findAll()
 * @method Warengruppe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WarengruppeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Warengruppe::class);
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
//     * @return Warengruppe[] Returns an array of Warengruppe objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Warengruppe
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
