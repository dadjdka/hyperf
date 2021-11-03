<?php
/**
 * ${PARAM_DOC}
 * @return ${TYPE_HINT}
 * ${THROWS_DOC}
 */

if (! function_exists('success')) {

    /**
     * Notes: 成功返回
     * @param null $data
     * @return array
     */
    function success($data = null): array
    {
        return [
            'code' => 200,
            'message' => 'success',
            'data' => $data
        ];
    }
}
