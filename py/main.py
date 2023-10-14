import markdown
import pygments
import sys


def convert_to_html(md_txt, highlight):
    codehilite = highlight == 'True'
    config = {
        'codehilite': {
            'noclasses': codehilite,
        }
    }
    md = markdown.Markdown(extensions=['markdown.extensions.tables', 'fenced_code', 'codehilite'], extension_configs=config)
    return md.convert(md_txt)


if __name__ == "__main__":
    if len(sys.argv) > 1:
        md_text = sys.argv[1]
        highlight = sys.argv[2]
        html = convert_to_html(md_text, highlight)
        print(html)
    else:
        print("error on py")
