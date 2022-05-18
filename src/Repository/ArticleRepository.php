<?php

namespace App\Repository;

use App\Entity\Article;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Article|null find($id, $lockMode = null, $lockVersion = null)
 * @method Article|null findOneBy(array $criteria, array $orderBy = null)
 * @method Article[]    findAll()
 * @method Article[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Article::class);
    }
    // Création d'une méthode pour récupérer les articles publics et le nbr, 
    //pour me permettre de voir les documents publics sur la page d'accueil, je choisir la lettre 'r' 
    //mais ca aurait pu être n'importe quelle lettre
    /**
     * Method this allow to find us public articles base on number of articles
     *
     * @param integer $nbArticles
     * @return array
     */
    public function findPublicArticle(?int $nbArticles): array
    {
        //return $this->createQueryBuilder('r')
        $queryBuilder = $this->createQueryBuilder('r')
        ->where('r.isPublic = 1') //En SQL false or true
        ->orderBy('r.createdAt', 'DESC');// je vais ranger mes articles du plus récent au moins récent
        if(!$nbArticles === 0 ||$nbArticles !==null) {// si le nbr d'articles est dif de0 ou nb  est éagal à null
            $queryBuilder ->setMaxResults($nbArticles);
        }
        return $queryBuilder->getQuery()
        //->setMaxResults($nbArticles)// je vais mettre un nbr max aà afficher
        //->getQuery()//je récupère ma Query
        ->getResult();//Et de ma Query je récupère le résulatt
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Article $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Article $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return Article[] Returns an array of Article objects
    //  */
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
    public function findOneBySomeField($value): ?Article
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
