<?php
/**
 * ${PARAM_DOC}
 * @return ${TYPE_HINT}
 * ${THROWS_DOC}
 */

if (! function_exists('success')) {

    /**
     * Notes: ζεθΏε
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
