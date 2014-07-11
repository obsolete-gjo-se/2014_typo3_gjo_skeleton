<?php
namespace Gjo\GjoExDatatypes\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Gjo\GjoExDatatypes\Domain\Model\DataType;

class DataTypeController extends ActionController
{
    /**
     * @var \Gjo\GjoExDatatypes\Domain\Repository\DataTypeRepository
     * @inject
     */
    protected $dataTypeRepository;

    /**
     * @var \Gjo\GjoExDatatypes\Domain\Repository\MonthRepository
     * @inject
     */
    protected $monthRepository;

    /**
     * @return void
     */
    public function findAllAction() {
        $this->view->assign('dataTypes', $this->dataTypeRepository->findAll());
    }

    /**
     * @param \Gjo\GjoExDatatypes\Domain\Model\DataType $dataType
     * @return void
     */
    public function showAction(DataType $dataType) {
        $this->view->assign('dataType', $dataType);
    }

    /**
     * @return void
     */
    public function addFormAction() {
        $this->view->assign('months', $this->monthRepository->findAll());
    }

    /**
     * @param \Gjo\GjoExDatatypes\Domain\Model\DataType $addForm
     * @return void
     */
    public function addAction(DataType $addForm) {
        $this->dataTypeRepository->add($addForm);
        $this->redirect('findAll');
    }

    /**
     * @param \Gjo\GjoExDatatypes\Domain\Model\DataType $dataType
     * @return void
     */
    public function updateFormAction(DataType $dataType) {
        $this->view->assign('months', $this->monthRepository->findAll());
        $this->view->assign('dataType', $dataType);
    }

    /**
     * @param \Gjo\GjoExDatatypes\Domain\Model\DataType $updateForm
     * @return void
     */
    public function updateAction(DataType $updateForm) {
        $this->dataTypeRepository->update($updateForm);
        $this->redirect('findAll');
    }

    /**
     * @param \Gjo\GjoExDatatypes\Domain\Model\DataType $dataType
     * @return void
     */
    public function removeAction(DataType $dataType){
        $this->dataTypeRepository->remove($dataType);
        $this->redirect('findAll');
    }
}