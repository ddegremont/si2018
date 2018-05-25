<?php

namespace App\Repository;

use App\Entity\Article;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * @method Article|null find($id, $lockMode = null, $lockVersion = null)
 * @method Article|null findOneBy(array $criteria, array $orderBy = null)
 * @method Article[]    findAll()
 * @method Article[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Article::class);
    }

    public function findCount(int $count)
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.creationTime', 'DESC')
            ->setMaxResults($count)
            ->getQuery()
            ->getResult()
            ;
    }
    public function getRandom(int $amount = 3)
    {
        return $this->getRandomNativeQuery($amount)->getResult();
    }

    public function getRandomNativeQuery(int $amount = 3)
    {
        # set entity name
        $table = $this->getClassMetadata()
            ->getTableName();

        # create rsm object
        $rsm = new ResultSetMapping();
        $rsm->addEntityResult($this->getEntityName(), 'a');
        $rsm->addFieldResult('a', 'id', 'id');

        # make query
        return $this->getEntityManager()->createNativeQuery("
            SELECT a.id FROM {$table} a ORDER BY RAND() LIMIT 0, {$amount}
        ", $rsm);
    }

    public function findPaginated($page, $nbMaxParPage)
    {
        if (!is_numeric($page)) {
            throw new \InvalidArgumentException(
                'La valeur de l\'argument $page est incorrecte (valeur : ' . $page . ').'
            );
        }

        if ($page < 1) {
            throw new NotFoundHttpException('La page demandée n\'existe pas');
        }

        if (!is_numeric($nbMaxParPage)) {
            throw new InvalidArgumentException(
                'La valeur de l\'argument $nbMaxParPage est incorrecte (valeur : ' . $nbMaxParPage . ').'
            );
        }

        $qb = $this->createQueryBuilder('a')
            ->where('CURRENT_DATE() >= a.creationTime')
            ->orderBy('a.creationTime', 'DESC');

        $query = $qb->getQuery();

        $premierResultat = ($page - 1) * $nbMaxParPage;
        $query->setFirstResult($premierResultat)->setMaxResults($nbMaxParPage);
        $paginator = new Paginator($query);

        if ( ($paginator->count() <= $premierResultat) && $page !== 1) {
            throw new NotFoundHttpException('La page demandée n\'existe pas.');
        }

        return $paginator;
    }
}
