<?php
class Potentials_GetTrialInfo_Action extends Vtiger_BasicAjax_Action {

	public function process(Vtiger_Request $request) {
		$recordId = $request->get('record');
		$recordModel = Vtiger_Record_Model::getInstanceById($recordId, 'Potentials');

		$response = new Vtiger_Response();

		if ($recordModel) {
			$cf_879 = $recordModel->get('cf_879');
			$cf_881 = $recordModel->get('cf_881');

			$response->setResult([
				'cf_879' => $cf_879,
				'cf_881' => $cf_881
			]);

            return $response;

		} else {
			$response->setError("Record not found");
		}

		$response->emit();
        return $response;
	}
}
