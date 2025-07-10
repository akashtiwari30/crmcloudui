<?php
class Dashboard_CustomChart_Action extends Vtiger_BasicAjax_Action {
    public function process(Vtiger_Request $request) {
        $data = json_encode([
            ['label' => 'Qualification', 'value' => 15],
            ['label' => 'Proposal', 'value' => 10],
            ['label' => 'Negotiation', 'value' => 5],
        ]);

        echo json_encode([
            'success' => true,
            'data' => $data
        ]);
    }
}
