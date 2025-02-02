<?php

it('displays the code diff', function () {
    [$statusCode, $output] = run('default', [
        'path' => base_path('tests/Fixtures/with-fixable-issues'),
        '-v',
    ]);

    expect($statusCode)->toBe(1)
        ->and($output->fetch())
        ->toContain('-$a = new stdClass;')
        ->toContain('+$a = new stdClass()');
});
