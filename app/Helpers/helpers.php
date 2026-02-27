<?php

if (!function_exists('sendSuccessResponse')) {
    /**
     * Standardized Success Response for all APIs.
     *
     * @param  mixed  $data
     * @param  string  $message
     * @param  int  $code
     * @return \Illuminate\Http\JsonResponse
     */
    function sendSuccessResponse($data = null, $message = 'Success', $code = 200) {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data'    => $data,
        ], $code);
    }
}

if (!function_exists('sendErrorResponse')) {
    /**
     * Standardized Error Response for all APIs.
     *
     * @param  string  $message
     * @param  int  $code
     * @param  mixed  $errors
     * @return \Illuminate\Http\JsonResponse
     */
    function sendErrorResponse($message = 'Error', $code = 400, $errors = null) {
        if (is_object($errors) && method_exists($errors, 'first')) {
            $errors = $errors->first();
        }

        if (is_array($errors)) {
            $first = collect($errors)->flatten()->first();
            $errors = $first ?: null;
        }

        return response()->json([
            'success' => false,
            'message' => $message,
            'errors'  => $errors,
        ], $code);
    }
}

if (!function_exists('isActiveRoute')) {
    /**
     * Set the active class if the current route matches the given route names pattern.
     *
     * @param array|string $routes
     * @param string $activeClass
     * @param string $inactiveClass
     * @return string
     */
    function isActiveRoute($routes, $activeClass = 'active', $inactiveClass = '')
    {
        foreach ((array) $routes as $route) {
            if (request()->routeIs($route)) {
                return $activeClass;
            }
        }

        return $inactiveClass;
    }
}