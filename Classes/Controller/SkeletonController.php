<?php
namespace Gjo\GjoSkeleton\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Gjo\GjoSkeleton\Domain\Model\Skeleton;

class SkeletonController extends ActionController
{
    /**
     * @var \Gjo\GjoSkeleton\Domain\Repository\SkeletonRepository
     * @inject
     */
    protected $skeletonRepository;

    /**
     * @return void
     */
    public function findAllAction() {
        $this->view->assign('skeleton', $this->skeletonRepository->findAll());
    }

    /**
     * @param \Gjo\GjoSkeleton\Domain\Model\Skeleton $skeleton
     * @return void
     */
    public function showAction(Skeleton $skeleton) {
        $this->view->assign('skeleton', $skeleton);
    }

    /**
     * @return void
     */
    public function addFormAction() {}

    /**
     * @param \Gjo\GjoSkeleton\Domain\Model\Skeleton $addForm
     * @return void
     */
    public function addAction(Skeleton $addForm) {
        $this->skeletonRepository->add($addForm);
        $this->redirect('findAll');
    }

    /**
     * @param \Gjo\GjoSkeleton\Domain\Model\Skeleton $skeleton
     * @return void
     */
    public function updateFormAction(Skeleton $skeleton) {
        $this->view->assign('skeleton', $skeleton);
    }

    /**
     * @param \Gjo\GjoSkeleton\Domain\Model\Skeleton $updateForm
     * @return void
     */
    public function updateAction(Skeleton $updateForm) {
        $this->skeletonRepository->update($updateForm);
        $this->redirect('findAll');
    }

    /**
     * @param \Gjo\GjoSkeleton\Domain\Model\Skeleton $skeleton
     * @return void
     */
    public function removeAction(Skeleton $skeleton){
        $this->skeletonRepository->remove($skeleton);
        $this->redirect('findAll');
    }
}