<?php
// src/Cuatrovientos/BlogBundle/EntityRepository/ApplicantRepository.php

namespace Cuatrovientos\ArteanBundle\EntityRepository;
use Doctrine\ORM\EntityRepository;

class ApplicantRepository extends EntityRepository
{

	/**
	* customized function
	*
	*/
	public function findApplicant($post_id=0)
	{
            return $this->findAll();
	}
}