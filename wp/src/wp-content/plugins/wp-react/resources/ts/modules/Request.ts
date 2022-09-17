import axios from 'axios'

export type RequestData = {
    method: string
    params?: string | { name: string, value: string | Blob }[]
}

export type RequestInterface = {
    send: () => Promise<any>
}

class Request<T> implements RequestInterface {
    private readonly data: RequestData

    public constructor(data: RequestData) {
        this.data = data
    }

    public send(): Promise<{ data: T }> {
        return axios.post(window.wpReactBirdsGlobals.ajaxUrl, this.createParams())
    }

    private createParams(): FormData {
        const params = new FormData()

        params.append('action', this.data.method)
        params.append('_ajax_nonce', window.wpReactBirdsGlobals.nonce)

        if (this.data.params) {
            if (typeof this.data.params === 'string') {
                params.append('data', this.data.params)
            } else {
                this.data.params.forEach(param => {
                    params.append(param.name, param.value)
                })
            }
        }

        return params
    }
}

export default Request