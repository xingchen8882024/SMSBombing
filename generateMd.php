<?php

class generate
{
    public function __invoke()
    {
        $arr = json_decode(file_get_contents('api.json'), true);

        $items = '';
        foreach ($arr as $key => $value) {
            if (!empty($value['url'])) {
                $parse = parse_url($value['url']);
                $items .= sprintf('[%s](%s)', $parse['scheme'] . '://' . $parse['host'], $parse['scheme'] . '://' . $parse['host']) . PHP_EOL;
            }
        }

        file_put_contents('./Links.md', $items);

        echo 'file put done.';
    }
}

return (new generate())();
